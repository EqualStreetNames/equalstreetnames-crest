[out:json][timeout:300];
( area["admin_level"="8"]["wikidata"="Q327259"]; )->.a;
(
    way["highway"]["name"]["highway"!="bus_stop"]["highway"!="elevator"]["highway"!="platform"](area.a);
    way["place"="square"]["name"](area.a);
);
out body;
>;
out skel qt;
