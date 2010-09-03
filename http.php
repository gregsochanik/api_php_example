<?php

/* load the xml file and stylesheet as domdocuments */
$xsl = new DomDocument();
$xsl->load("articles.xsl");
$inputdom = new DomDocument();
$inputdom->load("articles.xml");

/* create the processor and import the stylesheet */
$proc = new XsltProcessor();
$xsl = $proc->importStylesheet($xsl);
$proc->setParameter(null, "titles", "Titles");

/* transform and output the xml document */
$newdom = $proc->transformToDoc($inputdom);
print $newdom->saveXML();

?>