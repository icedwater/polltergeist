#! /usr/bin/env python
#

def point_in_polygon(x, y, poly):
    """
    Using the algorithm in http://stackoverflow.com/a/16625697
    Checks if a given point is in a polygon.
    """
    n = len(poly)
    inside = False

    p1x, p1y = poly[0]
    for i in range(n + 1):
        p2x, p2y = poly[i % n]
        if y > min(p1y, p2y):
            if y <= max(p1y, p2y):
                if x <= max(p1x, p2x):
                    if p1y != p2y:
                        xints = (y - p1y) * (p2x - p1x) / (p2y - p1y) + p1x
                    if p1x == p2x or x <= xints:
                        inside = not inside
        p1x, p1y = p2x, p2y

    return inside

def list_shapes_kml(filename):
    """
    Using the algorithm in http://stackoverflow.com/a/16625697
    Checks if a given point is in a polygon.
    """
    import json
    with open(filename, "r") as kml:
        pass

if __name__ == "__main__":
    x = 0.5
    y = 1.5
    poly = [(0, 0), (2, 0), (2, 2), (0, 2)]
    print point_in_polygon(x, y, poly)

    list_shapes_kml('data/bounds.kml')
