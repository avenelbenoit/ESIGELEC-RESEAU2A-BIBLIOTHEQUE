#!/bin/sh


if [ $# -ne 2 ]
then
	echo "usage : led.sh couleur etat"
	echo "exemple : led.sh verte 1"

else

case $1 in

verte)

sudo /home/pi/pilotes/wiringPi/gpio/gpio mode 1 out
sudo /home/pi/pilotes/wiringPi/gpio/gpio write 1 $2

;;
orange)

sudo /home/pi/pilotes/wiringPi/gpio/gpio mode 2 out
sudo /home/pi/pilotes/wiringPi/gpio/gpio write 2 $2



;;

rouge)

sudo /home/pi/pilotes/wiringPi/gpio/gpio mode 3 out
sudo /home/pi/pilotes/wiringPi/gpio/gpio write 3 $2



;;

*)
echo "erreur couleur : choisir rouge, verte ou orange"

esac 
fi


