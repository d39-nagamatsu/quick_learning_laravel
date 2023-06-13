<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::insert('INSERT INTO books (isbn, title, price, publisher, published)VALUES("978-4-8222-5399-8", "Visual C# 超入門", 2000, "ジャパンIT", "2022-08-22")');
    DB::insert('INSERT INTO books(isbn, title, price, publisher, published) VALUES("978-4-7980-5759-0", "Androidアプリ開発", 3200, "優丸システム", "2022-08-10")');
    DB::insert('INSERT INTO books(isbn, title, price, publisher, published) VALUES("978-4-7981-5112-0", "自学自習Java 新版", 2980, "走跳社", "2022-05-15")');
    DB::insert('INSERT INTO books(isbn, title, price, publisher, published) VALUES("978-4-7741-9763-0", "しっかり学ぶ Python", 2480, "テックCode", "2021-05-24")');
    DB::insert('INSERT INTO books(isbn, title, price, publisher, published) VALUES("978-4-7741-9617-6", "Swiftミニリファレンス", 2880, "テックCode", "2021-03-09")');
    DB::insert('INSERT INTO books(isbn, title, price, publisher, published) VALUES("978-4-7981-5382-7", "自学自習C# 新版", 3600, "走跳社", "2017-12-15")');
    DB::insert('INSERT INTO books(isbn, title, price, publisher, published) VALUES("978-4-295-00409-7", "いまから学ぶJavaScript", 2400, "IT Emotion", "2021-07-20")');
    DB::insert('INSERT INTO books(isbn, title, price, publisher, published) VALUES("978-4-295-00638-1", "いまから学ぶHTML/CSS", 2400, "IT Emotion", "2022-06-21")');
    DB::insert('INSERT INTO books(isbn, title, price, publisher, published) VALUES("978-4-7981-5757-3", "JavaScriptレシピ", 2800, "走跳社", "2021-10-15")');

    // Book::factory()->count(50)->create();
  }
}
