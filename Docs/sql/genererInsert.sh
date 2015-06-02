#!/bin/bash

while read line  
do  

var1=$(echo $line | cut -f1 --delimiter=" ")
var2=$(echo $line | cut -f2 --delimiter=" ")

echo "insert into ( $var1 , $var2);" >> fichier.sql ; 


done  < file.txt
