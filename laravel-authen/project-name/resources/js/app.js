import './bootstrap'; // Bootstrap সংক্রান্ত কোড ইম্পোর্ট করা হচ্ছে, যা Laravel Mix দ্বারা তৈরি।
import 'bootstrap'; // Bootstrap JavaScript ফাইল ইম্পোর্ট করা হচ্ছে, যা Bootstrap এর JS ফাংশনালিটি সরবরাহ করে।

import Alpine from 'alpinejs'; // Alpine.js লাইব্রেরি ইম্পোর্ট করা হচ্ছে।

window.Alpine = Alpine; // Alpine.js কে global scope এ উপলব্ধ করা হচ্ছে।

Alpine.start(); // Alpine.js এর কার্যক্রম শুরু করা হচ্ছে।
