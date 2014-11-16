#! /usr/bin/env python
#

"""
Grab the dump from the ST search API, using command line arguments as keywords.
From the results, write a decent HTML presentation.
"""

import sys, json, string
from curl import Curl as curl
from urllib2 import quote

# necessary variables
st_api = "http://apps.sphdigital.com/stapp/api/"
operation = "search/"
keywords = string.join(sys.argv[1:], ' ')
#keywords = sys.argv[1]
api_request = curl()
output = []
writeto = "data/" + keywords + ".txt"
limit = 5

# concatenate the arguments and post
results = api_request.post(st_api + operation + quote(keywords), "")

# check for multiple objects
try:
    results_obj = json.loads(results)
    for article in results_obj['hits']:
        src = article['_source']
        try:
            blurb = "<p><a href = '%s' title = '%s'>%s</a> by %s (%s)</p>" % (src['articleurl'], src['teaser'], src['headline_en'], src['byline_en'], src['publicationdate'])
            output.append(blurb)
        except KeyError as k:
            print "Sorry, one portion (" + k.message + ") is missing."
except KeyError as k:
    print "Could not find", k, "while retrieving list of results."
except ValueError as v:
    print v.message

with open(writeto, "w") as output_file:
    # output_file.write(entry)
    for entry in output[:limit]:
        output_file.write(entry + '\r\n')

print "Done!"
