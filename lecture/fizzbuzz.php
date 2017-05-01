<?php
//3で割りきれるとFizz
//5で割りきれるとBazz
//15で割りきれるとFizzBazz

for ($i=1; $i <36 ; $i++) {
 if ($i % 15 == 0) {
        print "FizzBuzz";
  } else {
    if ($i % 3 == 0) {
        print "Fizz";
    } else {
      if ($i % 5 == 0) {
        print "Buzz";
      } else {
        print $i;
      }
    }
  }
 }
