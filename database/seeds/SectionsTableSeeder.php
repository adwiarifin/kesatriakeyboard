<?php

use Illuminate\Database\Seeder;
use App\Section;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $section = new Section();
        $section->key = 'title';
        $section->value = 'Kesatria Keyboard';
        $section->save();

        $section = new Section();
        $section->key = 'subtitle';
        $section->value = 'Coding expert in web and mobile development';
        $section->save();

        $section = new Section();
        $section->key = 'who_we_are';
        $section->value = 'A highly focused software developer with seven years’ experience in a variety of development and engineering positions. Organised, methodical and a keen eye for detail results in solid coding and trustworthy software programmes. Understanding client requirements and communicating the progress of projects are core values in achieving long lasting business relationships.';
        $section->save();

        $section = new Section();
        $section->key = 'who_we_are_1';
        $section->value = 'Spend your time generating new ideas. You don\'t have to think of implementing.';
        $section->save();

        $section = new Section();
        $section->key = 'who_we_are_2';
        $section->value = 'Larger, yet dramatically thinner. More powerful, but remarkably power efficient.';
        $section->save();

        $section = new Section();
        $section->key = 'who_we_are_3';
        $section->value = 'Choose from a veriety of many colors resembling sugar paper pastels.';
        $section->save();

        $section = new Section();
        $section->key = 'who_we_are_4';
        $section->value = 'Find unique and handmade delightful designs related items directly from our sellers.';
        $section->save();

        $section = new Section();
        $section->key = 'our_products';
        $section->value = 'This is some of our awesome products, made with love on every occasion. Some made for hobby, some made for projects.';
        $section->save();

        $section = new Section();
        $section->key = 'contact';
        $section->value = '<p>Adwi Arifin<br>
        +62857 555 28 252<br>
        Mon - Fri, 8:00-16:00<br>
        </p>';
        $section->save();

        $section = new Section();
        $section->key = 'address';
        $section->value = '<p>Perumahan Turen Permai<br>
        Blok G-03, Talangsuko<br>
        Turen, Malang<br>
        </p>';
        $section->save();

        $section = new Section();
        $section->key = 'social_twitter';
        $section->value = 'https://twitter.com/kesatriakeyboard';
        $section->save();

        $section = new Section();
        $section->key = 'social_facebook';
        $section->value = 'https://facebook.com/kesatriakeyboard';
        $section->save();

        $section = new Section();
        $section->key = 'social_instagram';
        $section->value = 'https://instagram.com/kesatriakeyboard';
        $section->save();

        $section = new Section();
        $section->key = 'social_plus';
        $section->value = 'https://plus.google.com/+KesatriaKeyboard';
        $section->save();
    }
}
