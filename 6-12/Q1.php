<?php

echo (int) 15.2 + (int) 14.7 + (int) (10.5 + 10.5);

echo '<br>'; // 50

echo gettype((int) (15.2 + 14.7 + (10.5 + 10.5))); // Integer