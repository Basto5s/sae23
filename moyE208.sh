#!/bin/bash
bash ./data.sh
nbr_lignes=$(wc -l < ./E208.txt)
tva=0
somme=0
moyenne=0
j=1
while ((j<$nbr_lignes))
			do
				tva=$(head -n $j ./E208.txt | tail -1)				
				somme=$((somme + tva))
				let "j=$j+1"
			done
echo "dcale=2; $somme/$nbr_lignes" | bc > ./moyE208.txt 


