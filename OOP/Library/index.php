<?php

//  namespace - class, function တွေမှာ name မတိုက်အောင်သုံး
// namespace ပေးမယ်ဆိုရင် File Folder ပတ်လမ်းကြောင်းပေးလေ့ရှိ
// Book/Book.php
// PSR-4 namespace ပေးတဲ့ standart တွေရှိတယ်၊ Framework တီထွင်မယ့်သူတွေဆိုရင် မဖြစ်မနေသိရမယ်။

include "Book/Book.php";
include "Member/Member.php";

// user namespace

//  folder\subfolder\ClassName
use Library\Member\Member;
use Library\Book\Book;

$book = new Book("one Click - Jeff Bezos","Richard L. Brandi");
echo $book->getDetails();
echo "<br>";

echo $book->readBook();
echo "<br>";

$member = new Member("Mg Mg","M1234");
echo $member->memberdetail();