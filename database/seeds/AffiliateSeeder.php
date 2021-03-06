<?php

use Illuminate\Database\Seeder;

class AffiliateSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Alice in Wonderland
        DB::table('affiliates')->insert([
            'title' => "Alice's Adventures in Wonderland and Through the Looking Glass (Penguin Classics Deluxe Edition)",
            'order' => 1,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'amazon_link' => "https://www.amazon.com/Alices-Adventures-Wonderland-Through-Looking-Glass/dp/0143107623/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Alices-Adventures-in-Wonderland-and-Through-the-Looking-Glass-Lewis-Carroll-Charlie-Lovett/9780143107620/?a_aid=ffed6a58",
            'cover_image' => 'images/alice-in-wonderland/1.jpg'
        ]);

        DB::table('affiliates')->insert([
            'title' => "Alice's Adventures in Wonderland (Illustrated by Yayoi Kusama)",
            'order' => 2,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'amazon_link' => "https://www.amazon.com/Lewis-Carrolls-Alices-Adventures-Wonderland/dp/0141197307/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Lewis-Carrolls-Alices-Adventures-in-Wonderland-Lewis-Carroll-Yayoi-Kusam/9780141197302/?a_aid=ffed6a58",
            'cover_image' => 'images/alice-in-wonderland/2.jpg'
        ]);

        DB::table('affiliates')->insert([
            'title' => "Alice's Adventures in Wonderland (Narrated by Scarlett Johansson)",
            'order' => 3,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'amazon_link' => "https://www.amazon.com/Alices-Adventures-in-Wonderland/dp/B015D84R02/?tag=laikareads-20",
            'bd_link' => "",
            'type' => 'audible',
            'cover_image' => 'images/alice-in-wonderland/3.jpg'
        ]);

        DB::table('affiliates')->insert([
            'title' => "Alice's Adventures in Wonderland (Illustrated by Andrea D'Aquino)",
            'order' => 4,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'amazon_link' => "https://www.amazon.com/Classics-Reimagined-Alices-Adventures-Wonderland/dp/1631590758/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Classics-Reimagined-Alices-Adventures-in-Wonderland-Lewis-Carroll-Andre-Daquino/9781631590757/?a_aid=ffed6a58",
            'cover_image' => 'images/alice-in-wonderland/4.jpg'
        ]);

        DB::table('affiliates')->insert([
            'title' => "Alice's Adventures in Wonderland (Illustrated by Anna Bond)",
            'order' => 5,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'amazon_link' => "https://www.amazon.com/Alices-Adventures-Wonderland-Lewis-Carroll/dp/0147515874/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Alices-Adventures-in-Wonderland-Lewis-Carroll/9780147515872/?a_aid=ffed6a58",
            'cover_image' => 'images/alice-in-wonderland/5.jpg'
        ]);

        DB::table('affiliates')->insert([
            'title' => "Alice’s Adventures in Wonderland (Illustrated by Salvador Dali)",
            'order' => 6,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'amazon_link' => "https://www.amazon.com/Alices-Adventures-Wonderland-Lewis-Carroll/dp/0691170029/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Alices-Adventures-in-Wonderland-Lewis-Carroll-Mark-Burstein-Salvador-Dali/9780691170022/?a_aid=ffed6a58",
            'cover_image' => 'images/alice-in-wonderland/6.jpg'
        ]);

        // Through the Looking-Glass
        DB::table('affiliates')->insert([
            'title' => "Alice's Adventures in Wonderland and Through the Looking Glass (Penguin Classics Deluxe Edition)",
            'order' => 1,
            'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
            'amazon_link' => "https://www.amazon.com/Alices-Adventures-Wonderland-Through-Looking-Glass/dp/0143107623/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Alices-Adventures-in-Wonderland-and-Through-the-Looking-Glass-Lewis-Carroll-Charlie-Lovett/9780143107620/?a_aid=ffed6a58",
            'cover_image' => 'images/through-the-looking-glass/1.jpg'
        ]);

        DB::table('affiliates')->insert([
            'title' => "Alice's Adventures in Wonderland & Through the Looking-Glass (Modern Library Classics)",
            'order' => 2,
            'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
            'amazon_link' => "https://www.amazon.com/dp/0375761381/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Alices-Adventures-in-Wonderland-AND-Alice-Through-the-Looking-Glass-Lewis-Carroll/9780375761386/?a_aid=ffed6a58",
            'cover_image' => 'images/through-the-looking-glass/2.jpg'
        ]);

        DB::table('affiliates')->insert([
            'title' => "Alice's Adventures in Wonderland and Through the Looking Glass (Narrated by Sheridan Smith)",
            'order' => 3,
            'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
            'amazon_link' => "https://www.amazon.com/Alices-Adventures-in-Wonderland/dp/B00TGBWVO2/?tag=laikareads-20",
            'bd_link' => "",
            'type' => "audible",
            'cover_image' => 'images/through-the-looking-glass/3.jpg'
        ]);

        DB::table('affiliates')->insert([
            'title' => "The Annotated Alice (150th Anniversary Deluxe Edition)",
            'order' => 4,
            'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
            'amazon_link' => "https://www.amazon.com/gp/product/0393245438/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Annotated-Alice-Lewis-Carroll-Martin-Gardner-Mark-Burstein-Sir-John-Tenniel/9780393245431/?a_aid=ffed6a58",
            'cover_image' => 'images/through-the-looking-glass/4.jpg'
        ]);

        DB::table('affiliates')->insert([
            'title' => "Alice's Adventures in Wonderland & Through the Looking-Glass (Macmillan Collector's Library)",
            'order' => 5,
            'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
            'amazon_link' => "https://www.amazon.com/Adventures-Wonderland-Looking-Glass-Macmillan-Collectors/dp/1909621579/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Alices-Adventures-in-Wonderland--Through-the-Looking-Glass-Lewis-Carroll/9781909621572/9780141192468/?a_aid=ffed6a58",
            'cover_image' => 'images/through-the-looking-glass/5.jpg'
        ]);

        DB::table('affiliates')->insert([
            'title' => "Alice in Wonderland (1000 Copy Limited Edition)",
            'order' => 6,
            'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
            'amazon_link' => "https://www.amazon.com/Alice-Wonderland-Anniversary-Illustrated-Limited/dp/1772261718/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Alice-in-Wonderland-150-Year-Anniversary-Edition-Illustrated-1000-Copy-Limited-Edition-Lewis-Carroll-Sir-John-Tenniel/9781772261714/?a_aid=ffed6a58",
            'cover_image' => 'images/through-the-looking-glass/6.jpg'
        ]);

		// The Adventures of Sherlock Holmes
        DB::table('affiliates')->insert([
            'title' => "The Complete Sherlock Holmes (Knickerbocker Classics)",
            'order' => 1,
            'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
            'amazon_link' => "https://www.amazon.com/Complete-Sherlock-Holmes-Knickerbocker-Classics/dp/1937994309/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Complete-Sherlock-Holmes-Sir-Arthur-Conan-Doyle/9781937994303/?a_aid=ffed6a58",
            'cover_image' => 'images/the-adventures-of-sherlock-holmes/1.png'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Original Illustrated Sherlock Holmes",
            'order' => 2,
            'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
            'amazon_link' => "https://www.amazon.com/Original-Illustrated-Sherlock-Holmes/dp/0890090572/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Original-Illustrated-Sherlock-Holmes-Sir-Arthur-Conan-Doyle-S-Paget/9780890090572/?a_aid=ffed6a58",
            'cover_image' => 'images/the-adventures-of-sherlock-holmes/2.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "Sherlock Holmes (Narrated by Stephen Fry)",
            'order' => 3,
            'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
            'amazon_link' => "https://www.amazon.com/Sherlock-Holmes/dp/B06VWQTBZ9/?tag=laikareads-20",
            'bd_link' => "",
			'type' => "audible",
            'cover_image' => 'images/the-adventures-of-sherlock-holmes/3.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Complete Sherlock Holmes",
            'order' => 4,
            'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
            'amazon_link' => "https://www.amazon.com/Complete-Sherlock-Holmes-Volumes/dp/0553328255/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Complete-Sherlock-Holmes-Sir-Arthur-Conan-Doyle/9780553328257/?a_aid=ffed6a58",
            'cover_image' => 'images/the-adventures-of-sherlock-holmes/4.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Adventures and Memoirs of Sherlock Holmes (Penguin Classics)",
            'order' => 5,
            'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
            'amazon_link' => "https://www.amazon.com/Adventures-Memoirs-Sherlock-Penguin-Classics/dp/0140437711/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Adventures-of-Sherlock-Holmes-and-the-Memoirs-of-Sherlock-Holmes-Sir-Arthur-Conan-Doyle-Iain-Pears-Ed-Glinert/9780140437713/?a_aid=ffed6a58",
            'cover_image' => 'images/the-adventures-of-sherlock-holmes/5.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Great Adventures of Sherlock Holmes (Puffin Classics)",
            'order' => 6,
            'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
            'amazon_link' => "https://www.amazon.com/Adventures-Sherlock-Holmes-Puffin-Classics/dp/0141332492/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Great-Adventures-of-Sherlock-Holmes-Conan-Doyle-Matt-Jones/9780141332499/?a_aid=ffed6a58",
            'cover_image' => 'images/the-adventures-of-sherlock-holmes/6.jpg'
        ]);

		// The Hound of the Baskervilles
        DB::table('affiliates')->insert([
            'title' => "Sherlock Holmes: The Novels (Penguin Classics Deluxe Edition)",
            'order' => 1,
            'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
            'amazon_link' => "https://www.amazon.com/Sherlock-Holmes-Novels-Penguin-Classics/dp/0143107135/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Sherlock-Holmes-The-Novels-Sir-Arthur-Conan-Doyle/9780143107132/?a_aid=ffed6a58",
            'cover_image' => 'images/the-hound-of-the-baskervilles/1.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Hound of the Baskervilles, A Study in Scarlet, The Sign of Four (Everyman's Library)",
            'order' => 2,
            'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
            'amazon_link' => "https://www.amazon.com/Hound-Baskervilles-Scarlet-Everymans-Library/dp/0375712674/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Hound-of-the-Baskervilles-Study-in-Scarlet-The-Sign-of-Four-Sir-Arthur-Conan-Doyle/9781841593630/?a_aid=ffed6a58",
            'cover_image' => 'images/the-hound-of-the-baskervilles/2.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "Sherlock Holmes: The Hound of the Baskervilles (Narrated by Derek Jacobi)",
            'order' => 3,
            'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
            'amazon_link' => "https://www.amazon.com/Sherlock-Holmes-Hound-Baskervilles/dp/B00906V6PI/?tag=laikareads-20",
			'bd_link' => "",
			'type' => "audible",
            'cover_image' => 'images/the-hound-of-the-baskervilles/3.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Hound of the Baskervilles (Puffin Classics)",
            'order' => 4,
            'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
            'amazon_link' => "https://www.amazon.com/Hound-Baskervilles-Puffin-Classics/dp/0141329394/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Hound-of-the-Baskervilles-Sir-Arthur-Conan-Doyle-Matt-Jones/9780141329390/?a_aid=ffed6a58",
            'cover_image' => 'images/the-hound-of-the-baskervilles/4.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Complete Sherlock Holmes, Volume I (Barnes & Noble Classics Series)",
            'order' => 5,
            'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
            'amazon_link' => "https://www.amazon.com/dp/1593080344/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Complete-Sherlock-Holmes-Volume-I-Barnes--Noble-Classics-Series-Sir-Arthur-Conan-Doyle/9781593080341/?a_aid=ffed6a58",
            'cover_image' => 'images/the-hound-of-the-baskervilles/5.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Complete Sherlock Holmes, Volume II (Barnes & Noble Classics Series)",
            'order' => 6,
            'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
            'amazon_link' => "https://www.amazon.com/Complete-Sherlock-Holmes-Barnes-Classics/dp/1593080409/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Complete-Sherlock-Holmes-Volume-II-Barnes--Noble-Classics-Series-Sir-Arthur-Conan-Doyle/9781593080402/?a_aid=ffed6a58",
            'cover_image' => 'images/the-hound-of-the-baskervilles/6.jpg'
        ]);

		// The Adventures of Tom Sawyer
		DB::table('affiliates')->insert([
            'title' => "The Complete Tom Sawyer",
            'order' => 1,
            'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
            'amazon_link' => "https://www.amazon.com/Complete-Tom-Sawyer-Mark-Twain/dp/1627300503/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Complete-Tom-Sawyer-Mark-Twain/9781627300506/?a_aid=ffed6a58",
            'cover_image' => 'images/the-adventures-of-tom-sawyer/1.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Adventures of Tom Sawyer (Penguin Classics)",
            'order' => 2,
            'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
            'amazon_link' => "https://www.amazon.com/Adventures-Tom-Sawyer-Penguin-Classics/dp/014310733X/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Adventures-of-Tom-Sawyer-Mark-Twain/9780143107330/?a_aid=ffed6a58",
            'cover_image' => 'images/the-adventures-of-tom-sawyer/2.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Adventures of Tom Sawyer (Narrated by Nick Offerman)",
            'order' => 3,
            'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
            'amazon_link' => "https://www.amazon.com/The-Adventures-of-Tom-Sawyer/dp/B01HQMJ9NS/?tag=laikareads-20",
            'bd_link' => "",
			'type' => "audible",
            'cover_image' => 'images/the-adventures-of-tom-sawyer/3.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Adventures of Tom Sawyer (Sterling Illustrated Classics)",
            'order' => 4,
            'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
            'amazon_link' => "https://www.amazon.com/Adventures-Sawyer-Sterling-Illustrated-Classics/dp/1402767625/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Adventures-Tom-Sawyer/9781402767623/?a_aid=ffed6a58",
            'cover_image' => 'images/the-adventures-of-tom-sawyer/4.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Adventures of Tom Sawyer (The Original Text Edition)",
            'order' => 5,
            'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
            'amazon_link' => "https://www.amazon.com/Mark-Twains-Adventures-Tom-Sawyer/dp/1603062394/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Mark-Twains-Adventures-of-Tom-Sawyer-Mark-Twain/9781603062398/?a_aid=ffed6a58",
            'cover_image' => 'images/the-adventures-of-tom-sawyer/5.jpg'
        ]);

		DB::table('affiliates')->insert([
			'title' => "The Adventures of Tom Sawyer (Barnes & Noble Classics Series)",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'amazon_link' => "https://www.amazon.com/Adventures-Sawyer-Barnes-Noble-Classics/dp/1593081391/?tag=laikareads-20",
			'bd_link' => "https://www.bookdepository.com/The-Adventures-of-Tom-Sawyer-Barnes--Noble-Classics-Series-Mark-Twain-H-Daniel-Peck/9781593081393/?a_aid=ffed6a58",
			'cover_image' => 'images/the-adventures-of-tom-sawyer/6.jpg'
		]);

		// The Adventures of Huckleberry Finn
		DB::table('affiliates')->insert([
            'title' => "The Adventures of Huckleberry Finn (Macmillan Collector's Library)",
            'order' => 1,
            'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
            'amazon_link' => "https://www.amazon.com/Adventures-Huckleberry-Macmillan-Collectors-Library/dp/1509827994/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Adventures-of-Huckleberry-Finn-Mark-Twain/9781509827992/?a_aid=ffed6a58",
            'cover_image' => 'images/the-adventures-of-huckleberry-finn/1.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Adventures of Huckleberry Finn (Barnes & Noble Flexibound Classics)",
            'order' => 2,
            'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
            'amazon_link' => "https://www.amazon.com/Adventures-Huckleberry-Flexibound-Classics-Editions/dp/1435159640/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Adventures-of-Huckleberry-Finn-Barnes--Noble-Flexibound-Classics-Mark-Twain/9781435159648/?a_aid=ffed6a58",
            'cover_image' => 'images/the-adventures-of-huckleberry-finn/2.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Adventures of Huckleberry Finn (Narrated by Elijah Wood)",
            'order' => 3,
            'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
            'amazon_link' => "https://www.amazon.com/Adventures-Huckleberry-Finn-Signature-Performance/dp/B004BDL7N6/?tag=laikareads-20",
			'bd_link' => "",
			'type' => "audible",
            'cover_image' => 'images/the-adventures-of-huckleberry-finn/3.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Adventures of Huckleberry Finn (The Original Text Edition)",
            'order' => 4,
            'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
            'amazon_link' => "https://www.amazon.com/Mark-Twains-Adventures-Huckleberry-Finn/dp/1603062416/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Mark-Twains-Adventures-of-Huckleberry-Finn-Mark-Twain/9781603062411/?a_aid=ffed6a58",
            'cover_image' => 'images/the-adventures-of-huckleberry-finn/4.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Adventures of Huckleberry Finn (The Ignatius Critical Editions)",
            'order' => 5,
            'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
            'amazon_link' => "https://www.amazon.com/Adventures-Huckleberry-Ignatius-Critical-Editions/dp/1586172964/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Adventures-of-Huckleberry-Finn-Mark-Twain/9781586172961/?a_aid=ffed6a58",
            'cover_image' => 'images/the-adventures-of-huckleberry-finn/5.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Adventures of Huckleberry Finn (Bantam Classic)",
            'order' => 6,
            'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
            'amazon_link' => "https://www.amazon.com/dp/0553210793/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Adventures-of-Huckleberry-Finn-Mark-Twain/9780553210798/?a_aid=ffed6a58",
            'cover_image' => 'images/the-adventures-of-huckleberry-finn/6.jpg'
        ]);

		// The Yellow Wallpaper
		DB::table('affiliates')->insert([
            'title' => "The Yellow Wall Paper (Classic Reprint)",
            'order' => 1,
            'book_id' => DB::table('books')->where('title', "The Yellow Wallpaper")->value('id'),
            'amazon_link' => "https://www.amazon.com/Yellow-Wall-Paper-Classic-Reprint/dp/1331495083/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Yellow-Wall-Paper-Classic-Reprint-Charlotte-Perkins-Stetson/9781331495086/?a_aid=ffed6a58",
            'cover_image' => 'images/the-yellow-wallpaper/1.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Yellow Wall-Paper: A Sourcebook and Critical Edition",
            'order' => 2,
            'book_id' => DB::table('books')->where('title', "The Yellow Wallpaper")->value('id'),
            'amazon_link' => "https://www.amazon.com/Charlotte-Perkins-Gilmans-Yellow-Wall-Paper/dp/0415263581/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Charlotte-Perkins-Gilmans-The-Yellow-Wall-Paper-Catherine-J-Golden/9780415263580/?a_aid=ffed6a58",
            'cover_image' => 'images/the-yellow-wallpaper/2.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Yellow Wallpaper (Narrated by Jo Myddleton)",
            'order' => 3,
            'book_id' => DB::table('books')->where('title', "The Yellow Wallpaper")->value('id'),
            'amazon_link' => "https://www.amazon.com/The-Yellow-Wallpaper/dp/B0016L6L0K/?tag=laikareads-20",
            'bd_link' => "",
			'type' => "audible",
            'cover_image' => 'images/the-yellow-wallpaper/3.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Yellow Wall-Paper and Other Writings (Modern Library Classics)",
            'order' => 4,
            'book_id' => DB::table('books')->where('title', "The Yellow Wallpaper")->value('id'),
            'amazon_link' => "https://www.amazon.com/Yellow-Wall-Paper-Writings-Library-Classics/dp/0679783407/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Yellow-Wallpaper-and-Other-Writings-Charlotte-Perkins-Gilman/9780679783404/?a_aid=ffed6a58",
            'cover_image' => 'images/the-yellow-wallpaper/4.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Yellow Wallpaper and Selected Writings (Virago Modern Classics)",
            'order' => 5,
            'book_id' => DB::table('books')->where('title', "The Yellow Wallpaper")->value('id'),
            'amazon_link' => "https://www.amazon.com/Yellow-Wallpaper-Selected-Writings-Classics/dp/1844085589/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Yellow-Wallpaper-And-Selected-Writings-Charlotte-Perkins-Gilman-Maggie-OFarrell/9781844085583/?a_aid=ffed6a58",
            'cover_image' => 'images/the-yellow-wallpaper/5.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Yellow Wallpaper and Other Stories: The Complete Gothic Collection",
            'order' => 6,
            'book_id' => DB::table('books')->where('title', "The Yellow Wallpaper")->value('id'),
            'amazon_link' => "https://www.amazon.com/Yellow-Wallpaper-Other-Stories-Collection/dp/0615594336/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Yellow-Wallpaper-and-Other-Stories-Charlotte-Perkins-Gilman-Aric-Cushing/9780615568393/?a_aid=ffed6a58",
            'cover_image' => 'images/the-yellow-wallpaper/6.jpg'
        ]);

		// The Awakening
		DB::table('affiliates')->insert([
            'title' => "The Awakening and Other Stories (Oxford World's Classics)",
            'order' => 1,
            'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
            'amazon_link' => "https://www.amazon.com/Awakening-Stories-Oxford-Worlds-Classics/dp/0199536945/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Awakening-Kate-Chopin-Pamel-Knights/9780199536948/?a_aid=ffed6a58",
            'cover_image' => 'images/the-awakening/1.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Awakening (Third Norton Critical Edition)",
            'order' => 2,
            'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
            'amazon_link' => "https://www.amazon.com/Awakening-Third-Norton-Critical-Editions/dp/0393617319/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Awakening-Kate-Chopin-Margo-Culley/9780393617313/?a_aid=ffed6a58",
            'cover_image' => 'images/the-awakening/2.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Awakening (Narrated byGrace Conlin)",
            'order' => 3,
            'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
            'amazon_link' => "https://www.amazon.com/Awakening-Kate-Chopin/dp/0786176431/?tag=laikareads-20",
            'bd_link' => "",
			'type' => "audible",
            'cover_image' => 'images/the-awakening/3.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Awakening and Selected Short Fiction (Barnes & Noble Classics Series)",
            'order' => 4,
            'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
            'amazon_link' => "https://www.amazon.com/Awakening-Selected-Fiction-Barnes-Classics/dp/1593081138/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Awakening-and-Selected-Short-Fiction-Barnes--Noble-Classics-Series-Kate-Chopin-Rachel-Adams/9781593081133/?a_aid=ffed6a58",
            'cover_image' => 'images/the-awakening/4.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Awakening and Selected Stories (Modern Library Classics)",
            'order' => 5,
            'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
            'amazon_link' => "https://www.amazon.com/Awakening-Selected-Stories-Library-Classics/dp/0679783334/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Wakening-and-Other-Stories-Kate-Chopin-Nin-Baym-Kaye-Gibbons/9780679783336/?a_aid=ffed6a58",
            'cover_image' => 'images/the-awakening/5.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Complete Works of Kate Chopin (Southern Literary Studies)",
            'order' => 6,
            'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
            'amazon_link' => "https://www.amazon.com/gp/product/0807131512/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Complete-Works-of-Kate-Chopin-Kate-Chopin-Send-All-Correspondance-Emily-Toth-Per-Seyersted-Edmund-Wilson/9780807131510/?a_aid=ffed6a58",
            'cover_image' => 'images/the-awakening/6.jpg'
        ]);

		// Pride and Prejudice
		DB::table('affiliates')->insert([
            'title' => "Pride and Prejudice: An Annotated Edition",
            'order' => 1,
            'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
            'amazon_link' => "https://www.amazon.com/Pride-Prejudice-Annotated-Jane-Austen/dp/0674049160/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Pride-and-Prejudice-Jane-Austen-Patrici-Meyer-Spacks/9780674049161/?a_aid=ffed6a58",
            'cover_image' => 'images/pride-and-prejudice/1.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Annotated Pride and Prejudice",
            'order' => 2,
            'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
            'amazon_link' => "https://www.amazon.com/Annotated-Pride-Prejudice-Revised-Expanded/dp/0307950905/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Annotated-Pride-and-Prejudice-Jane-Austen-David-M-Shapard/9780307950901/?a_aid=ffed6a58",
            'cover_image' => 'images/pride-and-prejudice/2.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "Pride and Prejudice (Narrated by Rosamund Pike)",
            'order' => 3,
            'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
            'amazon_link' => "https://www.amazon.com/Pride-and-Prejudice/dp/B016LN4BYA/?tag=laikareads-20",
            'bd_link' => "",
			'type' => "audible",
            'cover_image' => 'images/pride-and-prejudice/3.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "Pride and Prejudice (Fourth Norton Critical Edition)",
            'order' => 4,
            'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
            'amazon_link' => "https://www.amazon.com/Prejudice-Fourth-Norton-Critical-Editions/dp/0393264882/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Pride-and-Prejudice-Jane-Austen-Donald-Gray-Mary--Favret/9780393264883/?a_aid=ffed6a58",
            'cover_image' => 'images/pride-and-prejudice/4.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "Pride and Prejudice (Ignatius Critical Edition)",
            'order' => 5,
            'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
            'amazon_link' => "https://www.amazon.com/Pride-Prejudice-Ignatius-Critical-Editions/dp/1586172638/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Pride-and-Prejudice-Jane-Austen/9781586172633/?a_aid=ffed6a58",
            'cover_image' => 'images/pride-and-prejudice/5.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "Pride and Prejudice (Classics Reimagined)",
            'order' => 6,
            'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
            'amazon_link' => "https://www.amazon.com/Classics-Reimagined-Pride-Prejudice-Austen/dp/1631593714/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Classics-Reimagined-Pride-and-Prejudice-Jane-Austen-Alice-Pattullo/9781631593710/?a_aid=ffed6a58",
            'cover_image' => 'images/pride-and-prejudice/6.jpg'
        ]);

		// Sense and Sensibility
		DB::table('affiliates')->insert([
            'title' => "Sense and Sensibility: An Annotated Edition",
            'order' => 1,
            'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
            'amazon_link' => "https://www.amazon.com/Sense-Sensibility-Annotated-Jane-Austen/dp/0674724550/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Sense-and-Sensibility-An-Annotated-Edition-Jane-Austen/9780674724556/?a_aid=ffed6a58",
            'cover_image' => 'images/sense-and-sensibility/1.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "Sense and Sensibility (The Cambridge Edition)",
            'order' => 2,
            'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
            'amazon_link' => "https://www.amazon.com/Sense-Sensibility-Cambridge-Works-Austen/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Sense-and-Sensibility-Jane-Austen-Edward-Copeland/9781107620551/?a_aid=ffed6a58",
            'cover_image' => 'images/sense-and-sensibility/2.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "Sense and Sensibility (Narrated by Kate Winslet)",
            'order' => 3,
            'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
            'amazon_link' => "https://www.amazon.com/Sense-and-Sensibility/dp/B000PUB1AS/?tag=laikareads-20",
            'bd_link' => "",
			'type' => "audible",
            'cover_image' => 'images/sense-and-sensibility/3.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Annotated Sense and Sensibility",
            'order' => 4,
            'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
            'amazon_link' => "https://www.amazon.com/Annotated-Sense-Sensibility-Jane-Austen/dp/0307390764/?tag=laikareads-20",
            'bd_link' => "/?a_aid=ffed6a58",
            'cover_image' => 'images/sense-and-sensibility/4.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "Sense and Sensibility (Ignatius Critical Edition)",
            'order' => 5,
            'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
            'amazon_link' => "https://www.amazon.com/Sense-Sensibility-Ignatius-Critical-Editions/dp/1586178385/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Sense-and-Sensibility-Jane-Austen/9781586178383/?a_aid=ffed6a58",
            'cover_image' => 'images/sense-and-sensibility/5.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "Sense and Sensibility (Penguin Classics)",
            'order' => 6,
            'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
            'amazon_link' => "https://www.amazon.com/Sense-Sensibility-Penguin-Classics-Austen/dp/0141439661/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Sense-and-Sensibility-Jane-Austen-Ros-Ballaster-Tony-Tanner/9780141439662/?a_aid=ffed6a58",
            'cover_image' => 'images/sense-and-sensibility/6.jpg'
        ]);

		// The Wizard of Oz
		DB::table('affiliates')->insert([
            'title' => "The Wonderful Wizard of Oz (Classics Reimagined)",
            'order' => 1,
            'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
            'amazon_link' => "https://www.amazon.com/Classics-Reimagined-Wonderful-Wizard-Oz/dp/1592538991/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Classics-Reimagined-The-Wonderful-Wizard-of-Oz-Olimpi-Zagnoli-L-Frank-Baum/9781592538997/?a_aid=ffed6a58",
            'cover_image' => 'images/the-wizard-of-oz/1.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Wonderful Wizard of Oz (Illustrated by Michael Sieben)",
            'order' => 2,
            'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
            'amazon_link' => "https://www.amazon.com/Wonderful-Wizard-Oz-Illustrations-Michael/dp/0062018086/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Wonderful-Wizard-of-Oz-L-Frank-Baum-Michael-Sieben/9780062018083/?a_aid=ffed6a58",
            'cover_image' => 'images/the-wizard-of-oz/2.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Wonderful Wizard of Oz (Narrated by Anne Hathaway)",
            'order' => 3,
            'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
            'amazon_link' => "https://www.amazon.com/The-Wonderful-Wizard-of-Oz/dp/B007IEHNMO/?tag=laikareads-20",
            'bd_link' => "",
			'type' => "audible",
            'cover_image' => 'images/the-wizard-of-oz/3.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Wizard of Oz (Penguin Classics Deluxe Edition)",
            'order' => 4,
            'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
            'amazon_link' => "https://www.amazon.com/Wizard-Oz-Wonderful-Emerald-Classics/dp/0143106635/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Wizard-of-Oz-Penguin-Classics-Deluxe-Edition-L-F-Baum/9780143106630/?a_aid=ffed6a58",
            'cover_image' => 'images/the-wizard-of-oz/4.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Wonderful Wizard of Oz (100th Anniversary Edition)",
            'order' => 5,
            'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
            'amazon_link' => "https://www.amazon.com/Wonderful-Wizard-Oz-Anniversary-Wonder/dp/0060293233/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Wizard-of-Oz-L-F-Baum-Michael-Patrick-Hearn-W-W-Denslow/9780060293239/?a_aid=ffed6a58",
            'cover_image' => 'images/the-wizard-of-oz/5.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Wonderful World of Oz (Penguin Classics)",
            'order' => 6,
            'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
            'amazon_link' => "https://www.amazon.com/Wonderful-World-Oz-Emerald-20th-Century/dp/0141180854/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Wonderful-World-of-Oz-L-F-Baum-Jack-David-Zipes/9780141180854/?a_aid=ffed6a58",
            'cover_image' => 'images/the-wizard-of-oz/6.jpg'
        ]);

		// The Wind in the Willows
		DB::table('affiliates')->insert([
            'title' => "The Annotated Wind in the Willows",
            'order' => 1,
            'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
            'amazon_link' => "https://www.amazon.com/Annotated-Wind-Willows-Books/dp/0393057747/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Annotated-Wind-in-the-Willows-Kenneth-Grahame-Brian-Jacques-Annie-Gauger/9780393057744/?a_aid=ffed6a58",
            'cover_image' => 'images/the-wind-in-the-willows/1.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Wind in the Willows: An Annotated Edition",
            'order' => 2,
            'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
            'amazon_link' => "https://www.amazon.com/Wind-Willows-Annotated-Kenneth-Grahame/dp/0674034473/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Wind-in-the-Willows-Kenneth-Grahame-Seth-Lerer/9780674034471/?a_aid=ffed6a58",
            'cover_image' => 'images/the-wind-in-the-willows/2.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Wind in the Willows (Narrated by Michael Hordern)",
            'order' => 3,
            'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
            'amazon_link' => "https://www.amazon.com/The-Wind-in-the-Willows/dp/B000VB49UK/?tag=laikareads-20",
            'bd_link' => "",
			'type' => "audible",
            'cover_image' => 'images/the-wind-in-the-willows/3.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Wind in the Willows (Illustrated by Don Daily)",
            'order' => 4,
            'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
            'amazon_link' => "https://www.amazon.com/Wind-Willows-Kenneth-Grahame/dp/1604334789/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Wind-in-the-Willows-Kenneth-Grahame/9781604334784/?a_aid=ffed6a58",
            'cover_image' => 'images/the-wind-in-the-willows/4.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Wind in the Willows (Sterling Illustrated Classics)",
            'order' => 5,
            'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
            'amazon_link' => "https://www.amazon.com/Wind-Willows-Sterling-Illustrated-Classics/dp/1402782837/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Wind-in-the-Willows-Kenneth-Grahame/9781402782831/?a_aid=ffed6a58",
            'cover_image' => 'images/the-wind-in-the-willows/5.jpg'
        ]);

		DB::table('affiliates')->insert([
            'title' => "The Wind in the Willows (Candlewick Illustrated Classic)",
            'order' => 6,
            'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
            'amazon_link' => "https://www.amazon.com/Wind-Willows-Candlewick-Illustrated-Classics/dp/0763642118/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/The-Wind-in-the-Willows-Kenneth-Grahame-Ing-Moore/9780763642112/?a_aid=ffed6a58",
            'cover_image' => 'images/the-wind-in-the-willows/6.jpg'
        ]);

		// DB::table('affiliates')->insert([
        //     'title' => "",
        //     'order' => 1,
        //     'book_id' => DB::table('books')->where('title', "")->value('id'),
        //     'amazon_link' => "/?tag=laikareads-20",
        //     'bd_link' => "/?a_aid=ffed6a58",
		// 	'type' => "audible",
        //     'cover_image' => 'images//1.jpg'
        // ]);
    }
}
