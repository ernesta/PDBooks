<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ChapterSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('chapters')->insert([
			'title' => "Down the Rabbit-Hole",
			'number' => "One",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
		    <p>
		      Alice was beginning to get very tired of sitting by her sister on the
		      bank, and of having nothing to do: once or twice she had peeped into the
		      book her sister was reading, but it had no pictures or conversations in
		      it, ‘and what is the use of a book,’ thought Alice ‘without pictures or
		      conversations?’
		    </p>
		    <p>
		      So she was considering in her own mind (as well as she could, for the hot
		      day made her feel very sleepy and stupid), whether the pleasure of making
		      a daisy-chain would be worth the trouble of getting up and picking the
		      daisies, when suddenly a White Rabbit with pink eyes ran close by her.
		    </p>
		    <p>
		      There was nothing so <i>very</i> remarkable in that; nor did Alice think it so
		      <i>very</i> much out of the way to hear the Rabbit say to itself, ‘Oh dear! Oh
		      dear! I shall be late!’ (when she thought it over afterwards, it occurred
		      to her that she ought to have wondered at this, but at the time it all
		      seemed quite natural); but when the Rabbit actually <i>took a watch out of
		      its waistcoat-pocket</i>, and looked at it, and then hurried on, Alice started
		      to her feet, for it flashed across her mind that she had never before seen
		      a rabbit with either a waistcoat-pocket, or a watch to take out of it, and
		      burning with curiosity, she ran across the field after it, and fortunately
		      was just in time to see it pop down a large rabbit-hole under the hedge.
		    </p>
		    <p>
		      In another moment down went Alice after it, never once considering how in
		      the world she was to get out again.
		    </p>
		    <p>
		      The rabbit-hole went straight on like a tunnel for some way, and then
		      dipped suddenly down, so suddenly that Alice had not a moment to think
		      about stopping herself before she found herself falling down a very deep
		      well.
		    </p>
		    <p>
		      Either the well was very deep, or she fell very slowly, for she had plenty
		      of time as she went down to look about her and to wonder what was going to
		      happen next. First, she tried to look down and make out what she was
		      coming to, but it was too dark to see anything; then she looked at the
		      sides of the well, and noticed that they were filled with cupboards and
		      book-shelves; here and there she saw maps and pictures hung upon pegs. She
		      took down a jar from one of the shelves as she passed; it was labelled
		      <span class='aiw-marmelade'>ORANGE MARMALADE</span>, but to her great disappointment it was empty: she did
		      not like to drop the jar for fear of killing somebody, so managed to put
		      it into one of the cupboards as she fell past it.
		    </p>
		    <p>
		      ‘Well!’ thought Alice to herself, ‘after such a fall as this, I shall
		      think nothing of tumbling down stairs! How brave they’ll all think me at
		      home! Why, I wouldn’t say anything about it, even if I fell off the top of
		      the house!’ (Which was very likely true.)
		    </p>
		    <p>
		      Down, down, down. Would the fall <i>never</i> come to an end! ‘I wonder how many
		      miles I’ve fallen by this time?’ she said aloud. ‘I must be getting
		      somewhere near the centre of the earth. Let me see: that would be four
		      thousand miles down, I think—’ (for, you see, Alice had learnt
		      several things of this sort in her lessons in the schoolroom, and though
		      this was not a <i>very</i> good opportunity for showing off her knowledge, as
		      there was no one to listen to her, still it was good practice to say it
		      over) ‘—yes, that’s about the right distance—but then I wonder
		      what Latitude or Longitude I’ve got to?’ (Alice had no idea what Latitude
		      was, or Longitude either, but thought they were nice grand words to say.)
		    </p>
		    <p>
		      Presently she began again. ‘I wonder if I shall fall right <i>through</i> the
		      earth! How funny it’ll seem to come out among the people that walk with
		      their heads downward! The Antipathies, I think—’ (she was rather
		      glad there <i>was</i> no one listening, this time, as it didn’t sound at all the
		      right word) ‘—but I shall have to ask them what the name of the
		      country is, you know. Please, Ma’am, is this New Zealand or Australia?’
		      (and she tried to curtsey as she spoke—fancy <i>curtseying</i> as you’re
		      falling through the air! Do you think you could manage it?) ‘And what an
		      ignorant little girl she’ll think me for asking! No, it’ll never do to
		      ask: perhaps I shall see it written up somewhere.’
		    </p>
		    <p>
		      Down, down, down. There was nothing else to do, so Alice soon began
		      talking again. ‘Dinah’ll miss me very much to-night, I should think!’
		      (Dinah was the cat.) ‘I hope they’ll remember her saucer of milk at
		      tea-time. Dinah my dear! I wish you were down here with me! There are no
		      mice in the air, I’m afraid, but you might catch a bat, and that’s very
		      like a mouse, you know. But do cats eat bats, I wonder?’ And here Alice
		      began to get rather sleepy, and went on saying to herself, in a dreamy
		      sort of way, ‘Do cats eat bats? Do cats eat bats?’ and sometimes, ‘Do bats
		      eat cats?’ for, you see, as she couldn’t answer either question, it didn’t
		      much matter which way she put it. She felt that she was dozing off, and
		      had just begun to dream that she was walking hand in hand with Dinah, and
		      saying to her very earnestly, ‘Now, Dinah, tell me the truth: did you ever
		      eat a bat?’ when suddenly, thump! thump! down she came upon a heap of
		      sticks and dry leaves, and the fall was over.
		    </p>
		    <p>
		      Alice was not a bit hurt, and she jumped up on to her feet in a moment:
		      she looked up, but it was all dark overhead; before her was another long
		      passage, and the White Rabbit was still in sight, hurrying down it. There
		      was not a moment to be lost: away went Alice like the wind, and was just
		      in time to hear it say, as it turned a corner, ‘Oh my ears and whiskers,
		      how late it’s getting!’ She was close behind it when she turned the
		      corner, but the Rabbit was no longer to be seen: she found herself in a
		      long, low hall, which was lit up by a row of lamps hanging from the roof.
		    </p>
		    <p>
		      There were doors all round the hall, but they were all locked; and when
		      Alice had been all the way down one side and up the other, trying every
		      door, she walked sadly down the middle, wondering how she was ever to get
		      out again.
		    </p>
		    <p>
		      Suddenly she came upon a little three-legged table, all made of solid
		      glass; there was nothing on it except a tiny golden key, and Alice’s first
		      thought was that it might belong to one of the doors of the hall; but,
		      alas! either the locks were too large, or the key was too small, but at
		      any rate it would not open any of them. However, on the second time round,
		      she came upon a low curtain she had not noticed before, and behind it was
		      a little door about fifteen inches high: she tried the little golden key
		      in the lock, and to her great delight it fitted!
		    </p>
		    <p>
		      Alice opened the door and found that it led into a small passage, not much
		      larger than a rat-hole: she knelt down and looked along the passage into
		      the loveliest garden you ever saw. How she longed to get out of that dark
		      hall, and wander about among those beds of bright flowers and those cool
		      fountains, but she could not even get her head through the doorway; ‘and
		      even if my head would go through,’ thought poor Alice, ‘it would be of
		      very little use without my shoulders. Oh, how I wish I could shut up like
		      a telescope! I think I could, if I only knew how to begin.’ For, you see,
		      so many out-of-the-way things had happened lately, that Alice had begun to
		      think that very few things indeed were really impossible.
		    </p>
		    <p>
		      There seemed to be no use in waiting by the little door, so she went back
		      to the table, half hoping she might find another key on it, or at any rate
		      a book of rules for shutting people up like telescopes: this time she
		      found a little bottle on it, (‘which certainly was not here before,’ said
		      Alice,) and round the neck of the bottle was a paper label, with the words
		      <span class='aiw-drink'>DRINK ME</span> beautifully printed on it in large letters.
		    </p>
		    <p>
		      It was all very well to say ‘Drink me,’ but the wise little Alice was not
		      going to do <i>that</i> in a hurry. ‘No, I’ll look first,’ she said, ‘and see
		      whether it’s marked “<i>poison</i>” or not’; for she had read several nice little
		      histories about children who had got burnt, and eaten up by wild beasts
		      and other unpleasant things, all because they <i>would</i> not remember the
		      simple rules their friends had taught them: such as, that a red-hot poker
		      will burn you if you hold it too long; and that if you cut your finger
		      <i>very</i> deeply with a knife, it usually bleeds; and she had never forgotten
		      that, if you drink much from a bottle marked ‘poison,’ it is almost
		      certain to disagree with you, sooner or later.
		    </p>
		    <p>
		      However, this bottle was <i>not</i> marked ‘poison,’ so Alice ventured to taste
		      it, and finding it very nice, (it had, in fact, a sort of mixed flavour of
		      cherry-tart, custard, pine-apple, roast turkey, toffee, and hot buttered
		      toast,) she very soon finished it off.
		    </p>
		    <p class='aiw-separator'>*****</p>
		    <p>
		      ‘What a curious feeling!’ said Alice; ‘I must be shutting up like a
		      telescope.’
		    </p>
		    <p>
		      And so it was indeed: she was now only ten inches high, and her face
		      brightened up at the thought that she was now the right size for going
		      through the little door into that lovely garden. First, however, she
		      waited for a few minutes to see if she was going to shrink any further:
		      she felt a little nervous about this; ‘for it might end, you know,’ said
		      Alice to herself, ‘in my going out altogether, like a candle. I wonder
		      what I should be like then?’ And she tried to fancy what the flame of a
		      candle is like after the candle is blown out, for she could not remember
		      ever having seen such a thing.
		    </p>
		    <p>
		      After a while, finding that nothing more happened, she decided on going
		      into the garden at once; but, alas for poor Alice! when she got to the
		      door, she found she had forgotten the little golden key, and when she went
		      back to the table for it, she found she could not possibly reach it: she
		      could see it quite plainly through the glass, and she tried her best to
		      climb up one of the legs of the table, but it was too slippery; and when
		      she had tired herself out with trying, the poor little thing sat down and
		      cried.
		    </p>
		    <p>
		      ‘Come, there’s no use in crying like that!’ said Alice to herself, rather
		      sharply; ‘I advise you to leave off this minute!’ She generally gave
		      herself very good advice, (though she very seldom followed it), and
		      sometimes she scolded herself so severely as to bring tears into her eyes;
		      and once she remembered trying to box her own ears for having cheated
		      herself in a game of croquet she was playing against herself, for this
		      curious child was very fond of pretending to be two people. ‘But it’s no
		      use now,’ thought poor Alice, ‘to pretend to be two people! Why, there’s
		      hardly enough of me left to make <i>one</i> respectable person!’
		    </p>
		    <p>
		      Soon her eye fell on a little glass box that was lying under the table:
		      she opened it, and found in it a very small cake, on which the words <span class='aiw-eat'>EAT
		      ME</span> were beautifully marked in currants. ‘Well, I’ll eat it,’ said Alice,
		      ‘and if it makes me grow larger, I can reach the key; and if it makes me
		      grow smaller, I can creep under the door; so either way I’ll get into the
		      garden, and I don’t care which happens!’
		    </p>
		    <p>
		      She ate a little bit, and said anxiously to herself, ‘Which way? Which
		      way?’, holding her hand on the top of her head to feel which way it was
		      growing, and she was quite surprised to find that she remained the same
		      size: to be sure, this generally happens when one eats cake, but Alice had
		      got so much into the way of expecting nothing but out-of-the-way things to
		      happen, that it seemed quite dull and stupid for life to go on in the
		      common way.
		    </p>
		    <p>
		      So she set to work, and very soon finished off the cake.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "The Pool of Tears",
			'number' => "Two",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
			  &lsquo;Curiouser and curiouser!&rsquo; cried Alice (she was so much surprised, that
			  for the moment she quite forgot how to speak good English); &lsquo;now I&rsquo;m
			  opening out like the largest telescope that ever was! Good-bye, feet!&rsquo;
			  (for when she looked down at her feet, they seemed to be almost out of
			  sight, they were getting so far off). &lsquo;Oh, my poor little feet, I wonder
			  who will put on your shoes and stockings for you now, dears? I&rsquo;m sure <i>I</i>
			  shan&rsquo;t be able! I shall be a great deal too far off to trouble myself
			  about you: you must manage the best way you can;&mdash;but I must be kind
			  to them,&rsquo; thought Alice, &lsquo;or perhaps they won&rsquo;t walk the way I want to go!
			  Let me see: I&rsquo;ll give them a new pair of boots every Christmas.&rsquo;
			</p>
			<p>
			  And she went on planning to herself how she would manage it. &lsquo;They must go
			  by the carrier,&rsquo; she thought; &lsquo;and how funny it&rsquo;ll seem, sending presents
			  to one&rsquo;s own feet! And how odd the directions will look!
			</p>
			<p class='aiw-foot' class='stanza'>
			 Alice&rsquo;s Right Foot, Esq.
			<br>
			   Hearthrug,
			<br>
				 near The Fender,
			<br>
				   (with Alice&rsquo;s love).
			</p>
			<p>
			  Oh dear, what nonsense I&rsquo;m talking!&rsquo;
			</p>
			<p>
			  Just then her head struck against the roof of the hall: in fact she was
			  now more than nine feet high, and she at once took up the little golden
			  key and hurried off to the garden door.
			</p>
			<p>
			  Poor Alice! It was as much as she could do, lying down on one side, to
			  look through into the garden with one eye; but to get through was more
			  hopeless than ever: she sat down and began to cry again.
			</p>
			<p>
			  &lsquo;You ought to be ashamed of yourself,&rsquo; said Alice, &lsquo;a great girl like
			  you,&rsquo; (she might well say this), &lsquo;to go on crying in this way! Stop this
			  moment, I tell you!&rsquo; But she went on all the same, shedding gallons of
			  tears, until there was a large pool all round her, about four inches deep
			  and reaching half down the hall.
			</p>
			<p>
			  After a time she heard a little pattering of feet in the distance, and she
			  hastily dried her eyes to see what was coming. It was the White Rabbit
			  returning, splendidly dressed, with a pair of white kid gloves in one hand
			  and a large fan in the other: he came trotting along in a great hurry,
			  muttering to himself as he came, &lsquo;Oh! the Duchess, the Duchess! Oh! won&rsquo;t
			  she be savage if I&rsquo;ve kept her waiting!&rsquo; Alice felt so desperate that she
			  was ready to ask help of any one; so, when the Rabbit came near her, she
			  began, in a low, timid voice, &lsquo;If you please, sir&mdash;&rsquo; The Rabbit
			  started violently, dropped the white kid gloves and the fan, and skurried
			  away into the darkness as hard as he could go.
			</p>
			<p>
			  Alice took up the fan and gloves, and, as the hall was very hot, she kept
			  fanning herself all the time she went on talking: &lsquo;Dear, dear! How queer
			  everything is to-day! And yesterday things went on just as usual. I wonder
			  if I&rsquo;ve been changed in the night? Let me think: was I the same when I got
			  up this morning? I almost think I can remember feeling a little different.
			  But if I&rsquo;m not the same, the next question is, Who in the world am I? Ah,
			  <i>that&rsquo;s</i> the great puzzle!&rsquo; And she began thinking over all the children she
			  knew that were of the same age as herself, to see if she could have been
			  changed for any of them.
			</p>
			<p>
			  &lsquo;I&rsquo;m sure I&rsquo;m not Ada,&rsquo; she said, &lsquo;for her hair goes in such long
			  ringlets, and mine doesn&rsquo;t go in ringlets at all; and I&rsquo;m sure I can&rsquo;t be
			  Mabel, for I know all sorts of things, and she, oh! she knows such a very
			  little! Besides, <i>she&rsquo;s</i> she, and <i>I&rsquo;m</i> I, and&mdash;oh dear, how puzzling it
			  all is! I&rsquo;ll try if I know all the things I used to know. Let me see: four
			  times five is twelve, and four times six is thirteen, and four times seven
			  is&mdash;oh dear! I shall never get to twenty at that rate! However, the
			  Multiplication Table doesn&rsquo;t signify: let&rsquo;s try Geography. London is the
			  capital of Paris, and Paris is the capital of Rome, and Rome&mdash;no,
			  <i>that&rsquo;s</i> all wrong, I&rsquo;m certain! I must have been changed for Mabel! I&rsquo;ll
			  try and say &ldquo;<i>How doth the little</i>&mdash;&ldquo;&rsquo; and she crossed her hands on her
			  lap as if she were saying lessons, and began to repeat it, but her voice
			  sounded hoarse and strange, and the words did not come the same as they
			  used to do:&mdash;
			</p>
			<p class='aiw-crocodile stanza'>
			 &lsquo;How doth the little crocodile
			<br>
			  Improve his shining tail,
			<br>
			 And pour the waters of the Nile
			<br>
			  On every golden scale!
			<br>
			</p>
			<p class='aiw-crocodile stanza'>
			 &lsquo;How cheerfully he seems to grin,
			<br>
			  How neatly spread his claws,
			<br>
			 And welcome little fishes in
			<br>
			  With gently smiling jaws!&rsquo;
			</p>
			<p>
			  &lsquo;I&rsquo;m sure those are not the right words,&rsquo; said poor Alice, and her eyes
			  filled with tears again as she went on, &lsquo;I must be Mabel after all, and I
			  shall have to go and live in that poky little house, and have next to no
			  toys to play with, and oh! ever so many lessons to learn! No, I&rsquo;ve made up
			  my mind about it; if I&rsquo;m Mabel, I&rsquo;ll stay down here! It&rsquo;ll be no use their
			  putting their heads down and saying &ldquo;Come up again, dear!&rdquo; I shall only
			  look up and say &ldquo;Who am I then? Tell me that first, and then, if I like
			  being that person, I&rsquo;ll come up: if not, I&rsquo;ll stay down here till I&rsquo;m
			  somebody else&rdquo;&mdash;but, oh dear!&rsquo; cried Alice, with a sudden burst of
			  tears, &lsquo;I do wish they <i>would</i> put their heads down! I am so <i>very</i> tired of
			  being all alone here!&rsquo;
			</p>
			<p>
			  As she said this she looked down at her hands, and was surprised to see
			  that she had put on one of the Rabbit&rsquo;s little white kid gloves while she
			  was talking. &lsquo;How <i>can</i> I have done that?&rsquo; she thought. &lsquo;I must be growing
			  small again.&rsquo; She got up and went to the table to measure herself by it,
			  and found that, as nearly as she could guess, she was now about two feet
			  high, and was going on shrinking rapidly: she soon found out that the
			  cause of this was the fan she was holding, and she dropped it hastily,
			  just in time to avoid shrinking away altogether.
			</p>
			<p>
			  &lsquo;That <i>was</i> a narrow escape!&rsquo; said Alice, a good deal frightened at the
			  sudden change, but very glad to find herself still in existence; &lsquo;and now
			  for the garden!&rsquo; and she ran with all speed back to the little door: but,
			  alas! the little door was shut again, and the little golden key was lying
			  on the glass table as before, &lsquo;and things are worse than ever,&rsquo; thought
			  the poor child, &lsquo;for I never was so small as this before, never! And I
			  declare it&rsquo;s too bad, that it is!&rsquo;
			</p>
			<p>
			  As she said these words her foot slipped, and in another moment, splash!
			  she was up to her chin in salt water. Her first idea was that she had
			  somehow fallen into the sea, &lsquo;and in that case I can go back by railway,&rsquo;
			  she said to herself. (Alice had been to the seaside once in her life, and
			  had come to the general conclusion, that wherever you go to on the English
			  coast you find a number of bathing machines in the sea, some children
			  digging in the sand with wooden spades, then a row of lodging houses, and
			  behind them a railway station.) However, she soon made out that she was in
			  the pool of tears which she had wept when she was nine feet high.
			</p>
			<p>
			  &lsquo;I wish I hadn&rsquo;t cried so much!&rsquo; said Alice, as she swam about, trying to
			  find her way out. &lsquo;I shall be punished for it now, I suppose, by being
			  drowned in my own tears! That <i>will</i> be a queer thing, to be sure! However,
			  everything is queer to-day.&rsquo;
			</p>
			<p>
			  Just then she heard something splashing about in the pool a little way
			  off, and she swam nearer to make out what it was: at first she thought it
			  must be a walrus or hippopotamus, but then she remembered how small she
			  was now, and she soon made out that it was only a mouse that had slipped
			  in like herself.
			</p>
			<p>
			  &lsquo;Would it be of any use, now,&rsquo; thought Alice, &lsquo;to speak to this mouse?
			  Everything is so out-of-the-way down here, that I should think very likely
			  it can talk: at any rate, there&rsquo;s no harm in trying.&rsquo; So she began: &lsquo;O
			  Mouse, do you know the way out of this pool? I am very tired of swimming
			  about here, O Mouse!&rsquo; (Alice thought this must be the right way of
			  speaking to a mouse: she had never done such a thing before, but she
			  remembered having seen in her brother&rsquo;s Latin Grammar, &lsquo;A mouse&mdash;of a
			  mouse&mdash;to a mouse&mdash;a mouse&mdash;O mouse!&rsquo;) The Mouse looked at
			  her rather inquisitively, and seemed to her to wink with one of its little
			  eyes, but it said nothing.
			</p>
			<p>
			  &lsquo;Perhaps it doesn&rsquo;t understand English,&rsquo; thought Alice; &lsquo;I daresay it&rsquo;s a
			  French mouse, come over with William the Conqueror.&rsquo; (For, with all her
			  knowledge of history, Alice had no very clear notion how long ago anything
			  had happened.) So she began again: &lsquo;Ou est ma chatte?&rsquo; which was the first
			  sentence in her French lesson-book. The Mouse gave a sudden leap out of
			  the water, and seemed to quiver all over with fright. &lsquo;Oh, I beg your
			  pardon!&rsquo; cried Alice hastily, afraid that she had hurt the poor animal&rsquo;s
			  feelings. &lsquo;I quite forgot you didn&rsquo;t like cats.&rsquo;
			</p>
			<p>
			  &lsquo;Not like cats!&rsquo; cried the Mouse, in a shrill, passionate voice. &lsquo;Would
			  <i>you</i> like cats if you were me?&rsquo;
			</p>
			<p>
			  &lsquo;Well, perhaps not,&rsquo; said Alice in a soothing tone: &lsquo;don&rsquo;t be angry about
			  it. And yet I wish I could show you our cat Dinah: I think you&rsquo;d take a
			  fancy to cats if you could only see her. She is such a dear quiet thing,&rsquo;
			  Alice went on, half to herself, as she swam lazily about in the pool, &lsquo;and
			  she sits purring so nicely by the fire, licking her paws and washing her
			  face&mdash;and she is such a nice soft thing to nurse&mdash;and she&rsquo;s such
			  a capital one for catching mice&mdash;oh, I beg your pardon!&rsquo; cried Alice
			  again, for this time the Mouse was bristling all over, and she felt
			  certain it must be really offended. &lsquo;We won&rsquo;t talk about her any more if
			  you&rsquo;d rather not.&rsquo;
			</p>
			<p>
			  &lsquo;We indeed!&rsquo; cried the Mouse, who was trembling down to the end of his
			  tail. &lsquo;As if <i>I</i> would talk on such a subject! Our family always <i>hated</i> cats:
			  nasty, low, vulgar things! Don&rsquo;t let me hear the name again!&rsquo;
			</p>
			<p>
			  &lsquo;I won&rsquo;t indeed!&rsquo; said Alice, in a great hurry to change the subject of
			  conversation. &lsquo;Are you&mdash;are you fond&mdash;of&mdash;of dogs?&rsquo; The
			  Mouse did not answer, so Alice went on eagerly: &lsquo;There is such a nice
			  little dog near our house I should like to show you! A little bright-eyed
			  terrier, you know, with oh, such long curly brown hair! And it&rsquo;ll fetch
			  things when you throw them, and it&rsquo;ll sit up and beg for its dinner, and
			  all sorts of things&mdash;I can&rsquo;t remember half of them&mdash;and it
			  belongs to a farmer, you know, and he says it&rsquo;s so useful, it&rsquo;s worth a
			  hundred pounds! He says it kills all the rats and&mdash;oh dear!&rsquo; cried
			  Alice in a sorrowful tone, &lsquo;I&rsquo;m afraid I&rsquo;ve offended it again!&rsquo; For the
			  Mouse was swimming away from her as hard as it could go, and making quite
			  a commotion in the pool as it went.
			</p>
			<p>
			  So she called softly after it, &lsquo;Mouse dear! Do come back again, and we
			  won&rsquo;t talk about cats or dogs either, if you don&rsquo;t like them!&rsquo; When the
			  Mouse heard this, it turned round and swam slowly back to her: its face
			  was quite pale (with passion, Alice thought), and it said in a low
			  trembling voice, &lsquo;Let us get to the shore, and then I&rsquo;ll tell you my
			  history, and you&rsquo;ll understand why it is I hate cats and dogs.&rsquo;
			</p>
			<p>
			  It was high time to go, for the pool was getting quite crowded with the
			  birds and animals that had fallen into it: there were a Duck and a Dodo, a
			  Lory and an Eaglet, and several other curious creatures. Alice led the
			  way, and the whole party swam to the shore.
			</p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "A Caucus-Race and a Long Tale",
			'number' => "Three",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      They were indeed a queer-looking party that assembled on the bank&mdash;the
		      birds with draggled feathers, the animals with their fur clinging close to
		      them, and all dripping wet, cross, and uncomfortable.
		    </p>
		    <p>
		      The first question of course was, how to get dry again: they had a
		      consultation about this, and after a few minutes it seemed quite natural
		      to Alice to find herself talking familiarly with them, as if she had known
		      them all her life. Indeed, she had quite a long argument with the Lory,
		      who at last turned sulky, and would only say, &lsquo;I am older than you, and
		      must know better&rsquo;; and this Alice would not allow without knowing how old
		      it was, and, as the Lory positively refused to tell its age, there was no
		      more to be said.
		    </p>
		    <p>
		      At last the Mouse, who seemed to be a person of authority among them,
		      called out, &lsquo;Sit down, all of you, and listen to me! <i>I&rsquo;ll</i> soon make you
		      dry enough!&rsquo; They all sat down at once, in a large ring, with the Mouse in
		      the middle. Alice kept her eyes anxiously fixed on it, for she felt sure
		      she would catch a bad cold if she did not get dry very soon.
		    </p>
		    <p>
		      &lsquo;Ahem!&rsquo; said the Mouse with an important air, &lsquo;are you all ready? This is
		      the driest thing I know. Silence all round, if you please! &ldquo;William the
		      Conqueror, whose cause was favoured by the pope, was soon submitted to by
		      the English, who wanted leaders, and had been of late much accustomed to
		      usurpation and conquest. Edwin and Morcar, the earls of Mercia and
		      Northumbria&mdash;&ldquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Ugh!&rsquo; said the Lory, with a shiver.
		    </p>
		    <p>
		      &lsquo;I beg your pardon!&rsquo; said the Mouse, frowning, but very politely: &lsquo;Did you
		      speak?&rsquo;
		    </p>
		    <p>
		      &lsquo;Not I!&rsquo; said the Lory hastily.
		    </p>
		    <p>
		      &lsquo;I thought you did,&rsquo; said the Mouse. &lsquo;&mdash;I proceed. &ldquo;Edwin and Morcar,
		      the earls of Mercia and Northumbria, declared for him: and even Stigand,
		      the patriotic archbishop of Canterbury, found it advisable&mdash;&ldquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Found <i>what</i>?&rsquo; said the Duck.
		    </p>
		    <p>
		      &lsquo;Found <i>it</i>,&rsquo; the Mouse replied rather crossly: &lsquo;of course you know what
		      &ldquo;it&rdquo; means.&rsquo;
		    </p>
		    <p>
		      &lsquo;I know what &ldquo;it&rdquo; means well enough, when <i>I</i> find a thing,&rsquo; said the Duck:
		      &lsquo;it&rsquo;s generally a frog or a worm. The question is, what did the archbishop
		      find?&rsquo;
		    </p>
		    <p>
		      The Mouse did not notice this question, but hurriedly went on, &lsquo;&ldquo;&mdash;found
		      it advisable to go with Edgar Atheling to meet William and offer him the
		      crown. William&rsquo;s conduct at first was moderate. But the insolence of his
		      Normans&mdash;&rdquo; How are you getting on now, my dear?&rsquo; it continued,
		      turning to Alice as it spoke.
		    </p>
		    <p>
		      &lsquo;As wet as ever,&rsquo; said Alice in a melancholy tone: &lsquo;it doesn&rsquo;t seem to dry
		      me at all.&rsquo;
		    </p>
		    <p>
		      &lsquo;In that case,&rsquo; said the Dodo solemnly, rising to its feet, &lsquo;I move that
		      the meeting adjourn, for the immediate adoption of more energetic remedies&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Speak English!&rsquo; said the Eaglet. &lsquo;I don&rsquo;t know the meaning of half those
		      long words, and, what&rsquo;s more, I don&rsquo;t believe you do either!&rsquo; And the
		      Eaglet bent down its head to hide a smile: some of the other birds
		      tittered audibly.
		    </p>
		    <p>
		      &lsquo;What I was going to say,&rsquo; said the Dodo in an offended tone, &lsquo;was, that
		      the best thing to get us dry would be a Caucus-race.&rsquo;
		    </p>
		    <p>
		      &lsquo;What <i>is</i> a Caucus-race?&rsquo; said Alice; not that she wanted much to know, but
		      the Dodo had paused as if it thought that <i>somebody</i> ought to speak, and no
		      one else seemed inclined to say anything.
		    </p>
		    <p>
		      &lsquo;Why,&rsquo; said the Dodo, &lsquo;the best way to explain it is to do it.&rsquo; (And, as
		      you might like to try the thing yourself, some winter day, I will tell you
		      how the Dodo managed it.)
		    </p>
		    <p>
		      First it marked out a race-course, in a sort of circle, (&lsquo;the exact shape
		      doesn&rsquo;t matter,&rsquo; it said,) and then all the party were placed along the
		      course, here and there. There was no &lsquo;One, two, three, and away,&rsquo; but they
		      began running when they liked, and left off when they liked, so that it
		      was not easy to know when the race was over. However, when they had been
		      running half an hour or so, and were quite dry again, the Dodo suddenly
		      called out &lsquo;The race is over!&rsquo; and they all crowded round it, panting, and
		      asking, &lsquo;But who has won?&rsquo;
		    </p>
		    <p>
		      This question the Dodo could not answer without a great deal of thought,
		      and it sat for a long time with one finger pressed upon its forehead (the
		      position in which you usually see Shakespeare, in the pictures of him),
		      while the rest waited in silence. At last the Dodo said, &lsquo;<i>Everybody</i> has
		      won, and all must have prizes.&rsquo;
		    </p>
		    <p>
		      &lsquo;But who is to give the prizes?&rsquo; quite a chorus of voices asked.
		    </p>
		    <p>
		      &lsquo;Why, <i>she</i>, of course,&rsquo; said the Dodo, pointing to Alice with one finger;
		      and the whole party at once crowded round her, calling out in a confused
		      way, &lsquo;Prizes! Prizes!&rsquo;
		    </p>
		    <p>
		      Alice had no idea what to do, and in despair she put her hand in her
		      pocket, and pulled out a box of comfits, (luckily the salt water had not
		      got into it), and handed them round as prizes. There was exactly one
		      a-piece all round.
		    </p>
		    <p>
		      &lsquo;But she must have a prize herself, you know,&rsquo; said the Mouse.
		    </p>
		    <p>
		      &lsquo;Of course,&rsquo; the Dodo replied very gravely. &lsquo;What else have you got in
		      your pocket?&rsquo; he went on, turning to Alice.
		    </p>
		    <p>
		      &lsquo;Only a thimble,&rsquo; said Alice sadly.
		    </p>
		    <p>
		      &lsquo;Hand it over here,&rsquo; said the Dodo.
		    </p>
		    <p>
		      Then they all crowded round her once more, while the Dodo solemnly
		      presented the thimble, saying &lsquo;We beg your acceptance of this elegant
		      thimble&rsquo;; and, when it had finished this short speech, they all cheered.
		    </p>
		    <p>
		      Alice thought the whole thing very absurd, but they all looked so grave
		      that she did not dare to laugh; and, as she could not think of anything to
		      say, she simply bowed, and took the thimble, looking as solemn as she
		      could.
		    </p>
		    <p>
		      The next thing was to eat the comfits: this caused some noise and
		      confusion, as the large birds complained that they could not taste theirs,
		      and the small ones choked and had to be patted on the back. However, it
		      was over at last, and they sat down again in a ring, and begged the Mouse
		      to tell them something more.
		    </p>
		    <p>
		      &lsquo;You promised to tell me your history, you know,&rsquo; said Alice, &lsquo;and why it
		      is you hate&mdash;C and D,&rsquo; she added in a whisper, half afraid that it
		      would be offended again.
		    </p>
		    <p>
		      &lsquo;Mine is a long and a sad tale!&rsquo; said the Mouse, turning to Alice, and
		      sighing.
		    </p>
		    <p>
		      &lsquo;It <i>is</i> a long tail, certainly,&rsquo; said Alice, looking down with wonder at
		      the Mouse&rsquo;s tail; &lsquo;but why do you call it sad?&rsquo; And she kept on puzzling
		      about it while the Mouse was speaking, so that her idea of the tale was
		      something like this:&mdash;
		    </p>
			<p class='aiw-prosecute stanza'>
		         &lsquo;Fury said to a
		         mouse, That he
		        met in the
		       house,
		     &ldquo;Let us
		      both go to
		       law: <i>I</i> will
		        prosecute
		         <i>you</i>.&mdash;Come,
		           I&rsquo;ll take no
		           denial; We
		          must have a
		        trial: For
		      really this
		     morning I&rsquo;ve
		    nothing
		    to do.&rdquo;
		      Said the
		      mouse to the
		       cur, &ldquo;Such
		        a trial,
		         dear Sir,
		            With
		          no jury
		        or judge,
		       would be
		      wasting
		      our
		      breath.&rdquo;
		        &ldquo;I&rsquo;ll be
		        judge, I&rsquo;ll
		         be jury,&rdquo;
		             Said
		         cunning
		          old Fury:
		          &ldquo;I&rsquo;ll
		          try the
		            whole
		            cause,
		              and
		           condemn
		           you
		          to
		           death.&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;You are not attending!&rsquo; said the Mouse to Alice severely. &lsquo;What are you
		      thinking of?&rsquo;
		    </p>
		    <p>
		      &lsquo;I beg your pardon,&rsquo; said Alice very humbly: &lsquo;you had got to the fifth
		      bend, I think?&rsquo;
		    </p>
		    <p>
		      &lsquo;I had <i>not</i>!&rsquo; cried the Mouse, sharply and very angrily.
		    </p>
		    <p>
		      &lsquo;A knot!&rsquo; said Alice, always ready to make herself useful, and looking
		      anxiously about her. &lsquo;Oh, do let me help to undo it!&rsquo;
		    </p>
		    <p>
		      &lsquo;I shall do nothing of the sort,&rsquo; said the Mouse, getting up and walking
		      away. &lsquo;You insult me by talking such nonsense!&rsquo;
		    </p>
		    <p>
		      &lsquo;I didn&rsquo;t mean it!&rsquo; pleaded poor Alice. &lsquo;But you&rsquo;re so easily offended,
		      you know!&rsquo;
		    </p>
		    <p>
		      The Mouse only growled in reply.
		    </p>
		    <p>
		      &lsquo;Please come back and finish your story!&rsquo; Alice called after it; and the
		      others all joined in chorus, &lsquo;Yes, please do!&rsquo; but the Mouse only shook
		      its head impatiently, and walked a little quicker.
		    </p>
		    <p>
		      &lsquo;What a pity it wouldn&rsquo;t stay!&rsquo; sighed the Lory, as soon as it was quite
		      out of sight; and an old Crab took the opportunity of saying to her
		      daughter &lsquo;Ah, my dear! Let this be a lesson to you never to lose <i>your</i>
		      temper!&rsquo; &lsquo;Hold your tongue, Ma!&rsquo; said the young Crab, a little snappishly.
		      &lsquo;You&rsquo;re enough to try the patience of an oyster!&rsquo;
		    </p>
		    <p>
		      &lsquo;I wish I had our Dinah here, I know I do!&rsquo; said Alice aloud, addressing
		      nobody in particular. &lsquo;She&rsquo;d soon fetch it back!&rsquo;
		    </p>
		    <p>
		      &lsquo;And who is Dinah, if I might venture to ask the question?&rsquo; said the Lory.
		    </p>
		    <p>
		      Alice replied eagerly, for she was always ready to talk about her pet:
		      &lsquo;Dinah&rsquo;s our cat. And she&rsquo;s such a capital one for catching mice you can&rsquo;t
		      think! And oh, I wish you could see her after the birds! Why, she&rsquo;ll eat a
		      little bird as soon as look at it!&rsquo;
		    </p>
		    <p>
		      This speech caused a remarkable sensation among the party. Some of the
		      birds hurried off at once: one old Magpie began wrapping itself up very
		      carefully, remarking, &lsquo;I really must be getting home; the night-air
		      doesn&rsquo;t suit my throat!&rsquo; and a Canary called out in a trembling voice to
		      its children, &lsquo;Come away, my dears! It&rsquo;s high time you were all in bed!&rsquo;
		      On various pretexts they all moved off, and Alice was soon left alone.
		    </p>
		    <p>
		      &lsquo;I wish I hadn&rsquo;t mentioned Dinah!&rsquo; she said to herself in a melancholy
		      tone. &lsquo;Nobody seems to like her, down here, and I&rsquo;m sure she&rsquo;s the best
		      cat in the world! Oh, my dear Dinah! I wonder if I shall ever see you any
		      more!&rsquo; And here poor Alice began to cry again, for she felt very lonely
		      and low-spirited. In a little while, however, she again heard a little
		      pattering of footsteps in the distance, and she looked up eagerly, half
		      hoping that the Mouse had changed his mind, and was coming back to finish
		      his story.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "The Rabbit Sends a Little Bill",
			'number' => "Four",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      It was the White Rabbit, trotting slowly back again, and looking anxiously
		      about as it went, as if it had lost something; and she heard it muttering
		      to itself &lsquo;The Duchess! The Duchess! Oh my dear paws! Oh my fur and
		      whiskers! She&rsquo;ll get me executed, as sure as ferrets are ferrets! Where
		      <i>can</i> I have dropped them, I wonder?&rsquo; Alice guessed in a moment that it was
		      looking for the fan and the pair of white kid gloves, and she very
		      good-naturedly began hunting about for them, but they were nowhere to be
		      seen&mdash;everything seemed to have changed since her swim in the pool,
		      and the great hall, with the glass table and the little door, had vanished
		      completely.
		    </p>
		    <p>
		      Very soon the Rabbit noticed Alice, as she went hunting about, and called
		      out to her in an angry tone, &lsquo;Why, Mary Ann, what <i>are</i> you doing out here?
		      Run home this moment, and fetch me a pair of gloves and a fan! Quick,
		      now!&rsquo; And Alice was so much frightened that she ran off at once in the
		      direction it pointed to, without trying to explain the mistake it had
		      made.
		    </p>
		    <p>
		      &lsquo;He took me for his housemaid,&rsquo; she said to herself as she ran. &lsquo;How
		      surprised he&rsquo;ll be when he finds out who I am! But I&rsquo;d better take him his
		      fan and gloves&mdash;that is, if I can find them.&rsquo; As she said this, she
		      came upon a neat little house, on the door of which was a bright brass
		      plate with the name &lsquo;W. RABBIT&rsquo; engraved upon it. She went in without
		      knocking, and hurried upstairs, in great fear lest she should meet the
		      real Mary Ann, and be turned out of the house before she had found the fan
		      and gloves.
		    </p>
		    <p>
		      &lsquo;How queer it seems,&rsquo; Alice said to herself, &lsquo;to be going messages for a
		      rabbit! I suppose Dinah&rsquo;ll be sending me on messages next!&rsquo; And she began
		      fancying the sort of thing that would happen: &lsquo;&ldquo;Miss Alice! Come here
		      directly, and get ready for your walk!&rdquo; &ldquo;Coming in a minute, nurse! But
		      I&rsquo;ve got to see that the mouse doesn&rsquo;t get out.&rdquo; Only I don&rsquo;t think,&rsquo;
		      Alice went on, &lsquo;that they&rsquo;d let Dinah stop in the house if it began
		      ordering people about like that!&rsquo;
		    </p>
		    <p>
		      By this time she had found her way into a tidy little room with a table in
		      the window, and on it (as she had hoped) a fan and two or three pairs of
		      tiny white kid gloves: she took up the fan and a pair of the gloves, and
		      was just going to leave the room, when her eye fell upon a little bottle
		      that stood near the looking-glass. There was no label this time with the
		      words <span class='aiw-drink'>DRINK ME</span> but nevertheless she uncorked it and put it to her lips.
		      &lsquo;I know <i>something</i> interesting is sure to happen,&rsquo; she said to herself,
		      &lsquo;whenever I eat or drink anything; so I&rsquo;ll just see what this bottle does.
		      I do hope it&rsquo;ll make me grow large again, for really I&rsquo;m quite tired of
		      being such a tiny little thing!&rsquo;
		    </p>
		    <p>
		      It did so indeed, and much sooner than she had expected: before she had
		      drunk half the bottle, she found her head pressing against the ceiling,
		      and had to stoop to save her neck from being broken. She hastily put down
		      the bottle, saying to herself &lsquo;That&rsquo;s quite enough&mdash;I hope I shan&rsquo;t
		      grow any more&mdash;As it is, I can&rsquo;t get out at the door&mdash;I do wish
		      I hadn&rsquo;t drunk quite so much!&rsquo;
		    </p>
		    <p>
		      Alas! it was too late to wish that! She went on growing, and growing, and
		      very soon had to kneel down on the floor: in another minute there was not
		      even room for this, and she tried the effect of lying down with one elbow
		      against the door, and the other arm curled round her head. Still she went
		      on growing, and, as a last resource, she put one arm out of the window,
		      and one foot up the chimney, and said to herself &lsquo;Now I can do no more,
		      whatever happens. What <i>will</i> become of me?&rsquo;
		    </p>
		    <p>
		      Luckily for Alice, the little magic bottle had now had its full effect,
		      and she grew no larger: still it was very uncomfortable, and, as there
		      seemed to be no sort of chance of her ever getting out of the room again,
		      no wonder she felt unhappy.
		    </p>
		    <p>
		      &lsquo;It was much pleasanter at home,&rsquo; thought poor Alice, &lsquo;when one wasn&rsquo;t
		      always growing larger and smaller, and being ordered about by mice and
		      rabbits. I almost wish I hadn&rsquo;t gone down that rabbit-hole&mdash;and yet&mdash;and
		      yet&mdash;it&rsquo;s rather curious, you know, this sort of life! I do wonder
		      what <i>can</i> have happened to me! When I used to read fairy-tales, I fancied
		      that kind of thing never happened, and now here I am in the middle of one!
		      There ought to be a book written about me, that there ought! And when I
		      grow up, I&rsquo;ll write one&mdash;but I&rsquo;m grown up now,&rsquo; she added in a
		      sorrowful tone; &lsquo;at least there&rsquo;s no room to grow up any more <i>here</i>.&rsquo;
		    </p>
		    <p>
		      &lsquo;But then,&rsquo; thought Alice, &lsquo;shall I <i>never</i> get any older than I am now?
		      That&rsquo;ll be a comfort, one way&mdash;never to be an old woman&mdash;but
		      then&mdash;always to have lessons to learn! Oh, I shouldn&rsquo;t like <i>that</i>!&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, you foolish Alice!&rsquo; she answered herself. &lsquo;How can you learn lessons
		      in here? Why, there&rsquo;s hardly room for <i>you</i>, and no room at all for any
		      lesson-books!&rsquo;
		    </p>
		    <p>
		      And so she went on, taking first one side and then the other, and making
		      quite a conversation of it altogether; but after a few minutes she heard a
		      voice outside, and stopped to listen.
		    </p>
		    <p>
		      &lsquo;Mary Ann! Mary Ann!&rsquo; said the voice. &lsquo;Fetch me my gloves this moment!&rsquo;
		      Then came a little pattering of feet on the stairs. Alice knew it was the
		      Rabbit coming to look for her, and she trembled till she shook the house,
		      quite forgetting that she was now about a thousand times as large as the
		      Rabbit, and had no reason to be afraid of it.
		    </p>
		    <p>
		      Presently the Rabbit came up to the door, and tried to open it; but, as
		      the door opened inwards, and Alice&rsquo;s elbow was pressed hard against it,
		      that attempt proved a failure. Alice heard it say to itself &lsquo;Then I&rsquo;ll go
		      round and get in at the window.&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>That</i> you won&rsquo;t&rsquo; thought Alice, and, after waiting till she fancied she
		      heard the Rabbit just under the window, she suddenly spread out her hand,
		      and made a snatch in the air. She did not get hold of anything, but she
		      heard a little shriek and a fall, and a crash of broken glass, from which
		      she concluded that it was just possible it had fallen into a
		      cucumber-frame, or something of the sort.
		    </p>
		    <p>
		      Next came an angry voice&mdash;the Rabbit&rsquo;s&mdash;&lsquo;Pat! Pat! Where are
		      you?&rsquo; And then a voice she had never heard before, &lsquo;Sure then I&rsquo;m here!
		      Digging for apples, yer honour!&rsquo;
		    </p>
		    <p>
		      &lsquo;Digging for apples, indeed!&rsquo; said the Rabbit angrily. &lsquo;Here! Come and
		      help me out of <i>this</i>!&rsquo; (Sounds of more broken glass.)
		    </p>
		    <p>
		      &lsquo;Now tell me, Pat, what&rsquo;s that in the window?&rsquo;
		    </p>
		    <p>
		      &lsquo;Sure, it&rsquo;s an arm, yer honour!&rsquo; (He pronounced it &lsquo;arrum.&rsquo;)
		    </p>
		    <p>
		      &lsquo;An arm, you goose! Who ever saw one that size? Why, it fills the whole
		      window!&rsquo;
		    </p>
		    <p>
		      &lsquo;Sure, it does, yer honour: but it&rsquo;s an arm for all that.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, it&rsquo;s got no business there, at any rate: go and take it away!&rsquo;
		    </p>
		    <p>
		      There was a long silence after this, and Alice could only hear whispers
		      now and then; such as, &lsquo;Sure, I don&rsquo;t like it, yer honour, at all, at
		      all!&rsquo; &lsquo;Do as I tell you, you coward!&rsquo; and at last she spread out her hand
		      again, and made another snatch in the air. This time there were <i>two</i> little
		      shrieks, and more sounds of broken glass. &lsquo;What a number of
		      cucumber-frames there must be!&rsquo; thought Alice. &lsquo;I wonder what they&rsquo;ll do
		      next! As for pulling me out of the window, I only wish they <i>could</i>! I&rsquo;m
		      sure <i>I</i> don&rsquo;t want to stay in here any longer!&rsquo;
		    </p>
		    <p>
		      She waited for some time without hearing anything more: at last came a
		      rumbling of little cartwheels, and the sound of a good many voices all
		      talking together: she made out the words: &lsquo;Where&rsquo;s the other ladder?&mdash;Why,
		      I hadn&rsquo;t to bring but one; Bill&rsquo;s got the other&mdash;Bill! fetch it here,
		      lad!&mdash;Here, put &lsquo;em up at this corner&mdash;No, tie &lsquo;em together
		      first&mdash;they don&rsquo;t reach half high enough yet&mdash;Oh! they&rsquo;ll do
		      well enough; don&rsquo;t be particular&mdash;Here, Bill! catch hold of this rope&mdash;Will
		      the roof bear?&mdash;Mind that loose slate&mdash;Oh, it&rsquo;s coming down!
		      Heads below!&rsquo; (a loud crash)&mdash;&lsquo;Now, who did that?&mdash;It was Bill,
		      I fancy&mdash;Who&rsquo;s to go down the chimney?&mdash;Nay, <i>I</i> shan&rsquo;t! <i>You</i> do
		      it!&mdash;<i>That</i> I won&rsquo;t, then!&mdash;Bill&rsquo;s to go down&mdash;Here, Bill!
		      the master says you&rsquo;re to go down the chimney!&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh! So Bill&rsquo;s got to come down the chimney, has he?&rsquo; said Alice to
		      herself. &lsquo;Shy, they seem to put everything upon Bill! I wouldn&rsquo;t be in
		      Bill&rsquo;s place for a good deal: this fireplace is narrow, to be sure; but I
		      <i>think</i> I can kick a little!&rsquo;
		    </p>
		    <p>
		      She drew her foot as far down the chimney as she could, and waited till
		      she heard a little animal (she couldn&rsquo;t guess of what sort it was)
		      scratching and scrambling about in the chimney close above her: then,
		      saying to herself &lsquo;This is Bill,&rsquo; she gave one sharp kick, and waited to
		      see what would happen next.
		    </p>
		    <p>
		      The first thing she heard was a general chorus of &lsquo;There goes Bill!&rsquo; then
		      the Rabbit&rsquo;s voice along&mdash;&lsquo;Catch him, you by the hedge!&rsquo; then
		      silence, and then another confusion of voices&mdash;&lsquo;Hold up his head&mdash;Brandy
		      now&mdash;Don&rsquo;t choke him&mdash;How was it, old fellow? What happened to
		      you? Tell us all about it!&rsquo;
		    </p>
		    <p>
		      Last came a little feeble, squeaking voice, (&lsquo;That&rsquo;s Bill,&rsquo; thought
		      Alice,) &lsquo;Well, I hardly know&mdash;No more, thank ye; I&rsquo;m better now&mdash;but
		      I&rsquo;m a deal too flustered to tell you&mdash;all I know is, something comes
		      at me like a Jack-in-the-box, and up I goes like a sky-rocket!&rsquo;
		    </p>
		    <p>
		      &lsquo;So you did, old fellow!&rsquo; said the others.
		    </p>
		    <p>
		      &lsquo;We must burn the house down!&rsquo; said the Rabbit&rsquo;s voice; and Alice called
		      out as loud as she could, &lsquo;If you do. I&rsquo;ll set Dinah at you!&rsquo;
		    </p>
		    <p>
		      There was a dead silence instantly, and Alice thought to herself, &lsquo;I
		      wonder what they <i>will</i> do next! If they had any sense, they&rsquo;d take the roof
		      off.&rsquo; After a minute or two, they began moving about again, and Alice
		      heard the Rabbit say, &lsquo;A barrowful will do, to begin with.&rsquo;
		    </p>
		    <p>
		      &lsquo;A barrowful of <i>what</i>?&rsquo; thought Alice; but she had not long to doubt, for
		      the next moment a shower of little pebbles came rattling in at the window,
		      and some of them hit her in the face. &lsquo;I&rsquo;ll put a stop to this,&rsquo; she said
		      to herself, and shouted out, &lsquo;You&rsquo;d better not do that again!&rsquo; which
		      produced another dead silence.
		    </p>
		    <p>
		      Alice noticed with some surprise that the pebbles were all turning into
		      little cakes as they lay on the floor, and a bright idea came into her
		      head. &lsquo;If I eat one of these cakes,&rsquo; she thought, &lsquo;it&rsquo;s sure to make <i>some</i>
		      change in my size; and as it can&rsquo;t possibly make me larger, it must make
		      me smaller, I suppose.&rsquo;
		    </p>
		    <p>
		      So she swallowed one of the cakes, and was delighted to find that she
		      began shrinking directly. As soon as she was small enough to get through
		      the door, she ran out of the house, and found quite a crowd of little
		      animals and birds waiting outside. The poor little Lizard, Bill, was in
		      the middle, being held up by two guinea-pigs, who were giving it something
		      out of a bottle. They all made a rush at Alice the moment she appeared;
		      but she ran off as hard as she could, and soon found herself safe in a
		      thick wood.
		    </p>
		    <p>
		      &lsquo;The first thing I&rsquo;ve got to do,&rsquo; said Alice to herself, as she wandered
		      about in the wood, &lsquo;is to grow to my right size again; and the second
		      thing is to find my way into that lovely garden. I think that will be the
		      best plan.&rsquo;
		    </p>
		    <p>
		      It sounded an excellent plan, no doubt, and very neatly and simply
		      arranged; the only difficulty was, that she had not the smallest idea how
		      to set about it; and while she was peering about anxiously among the
		      trees, a little sharp bark just over her head made her look up in a great
		      hurry.
		    </p>
		    <p>
		      An enormous puppy was looking down at her with large round eyes, and
		      feebly stretching out one paw, trying to touch her. &lsquo;Poor little thing!&rsquo;
		      said Alice, in a coaxing tone, and she tried hard to whistle to it; but
		      she was terribly frightened all the time at the thought that it might be
		      hungry, in which case it would be very likely to eat her up in spite of
		      all her coaxing.
		    </p>
		    <p>
		      Hardly knowing what she did, she picked up a little bit of stick, and held
		      it out to the puppy; whereupon the puppy jumped into the air off all its
		      feet at once, with a yelp of delight, and rushed at the stick, and made
		      believe to worry it; then Alice dodged behind a great thistle, to keep
		      herself from being run over; and the moment she appeared on the other
		      side, the puppy made another rush at the stick, and tumbled head over
		      heels in its hurry to get hold of it; then Alice, thinking it was very
		      like having a game of play with a cart-horse, and expecting every moment
		      to be trampled under its feet, ran round the thistle again; then the puppy
		      began a series of short charges at the stick, running a very little way
		      forwards each time and a long way back, and barking hoarsely all the
		      while, till at last it sat down a good way off, panting, with its tongue
		      hanging out of its mouth, and its great eyes half shut.
		    </p>
		    <p>
		      This seemed to Alice a good opportunity for making her escape; so she set
		      off at once, and ran till she was quite tired and out of breath, and till
		      the puppy&rsquo;s bark sounded quite faint in the distance.
		    </p>
		    <p>
		      &lsquo;And yet what a dear little puppy it was!&rsquo; said Alice, as she leant
		      against a buttercup to rest herself, and fanned herself with one of the
		      leaves: &lsquo;I should have liked teaching it tricks very much, if&mdash;if I&rsquo;d
		      only been the right size to do it! Oh dear! I&rsquo;d nearly forgotten that I&rsquo;ve
		      got to grow up again! Let me see&mdash;how <i>is</i> it to be managed? I suppose
		      I ought to eat or drink something or other; but the great question is,
		      what?&rsquo;
		    </p>
		    <p>
		      The great question certainly was, what? Alice looked all round her at the
		      flowers and the blades of grass, but she did not see anything that looked
		      like the right thing to eat or drink under the circumstances. There was a
		      large mushroom growing near her, about the same height as herself; and
		      when she had looked under it, and on both sides of it, and behind it, it
		      occurred to her that she might as well look and see what was on the top of
		      it.
		    </p>
		    <p>
		      She stretched herself up on tiptoe, and peeped over the edge of the
		      mushroom, and her eyes immediately met those of a large caterpillar, that
		      was sitting on the top with its arms folded, quietly smoking a long
		      hookah, and taking not the smallest notice of her or of anything else.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Advice from a Caterpillar",
			'number' => "Five",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      The Caterpillar and Alice looked at each other for some time in silence:
		      at last the Caterpillar took the hookah out of its mouth, and addressed
		      her in a languid, sleepy voice.
		    </p>
		    <p>
		      &lsquo;Who are <i>you</i>?&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      This was not an encouraging opening for a conversation. Alice replied,
		      rather shyly, &lsquo;I&mdash;I hardly know, sir, just at present&mdash;at least
		      I know who I <i>was</i> when I got up this morning, but I think I must have been
		      changed several times since then.&rsquo;
		    </p>
		    <p>
		      &lsquo;What do you mean by that?&rsquo; said the Caterpillar sternly. &lsquo;Explain
		      yourself!&rsquo;
		    </p>
		    <p>
		      &lsquo;I can&rsquo;t explain <i>myself</i>, I&rsquo;m afraid, sir&rsquo; said Alice, &lsquo;because I&rsquo;m not
		      myself, you see.&rsquo;
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t see,&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      &lsquo;I&rsquo;m afraid I can&rsquo;t put it more clearly,&rsquo; Alice replied very politely,
		      &lsquo;for I can&rsquo;t understand it myself to begin with; and being so many
		      different sizes in a day is very confusing.&rsquo;
		    </p>
		    <p>
		      &lsquo;It isn&rsquo;t,&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      &lsquo;Well, perhaps you haven&rsquo;t found it so yet,&rsquo; said Alice; &lsquo;but when you
		      have to turn into a chrysalis&mdash;you will some day, you know&mdash;and
		      then after that into a butterfly, I should think you&rsquo;ll feel it a little
		      queer, won&rsquo;t you?&rsquo;
		    </p>
		    <p>
		      &lsquo;Not a bit,&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      &lsquo;Well, perhaps your feelings may be different,&rsquo; said Alice; &lsquo;all I know
		      is, it would feel very queer to <i>me</i>.&rsquo;
		    </p>
		    <p>
		      &lsquo;You!&rsquo; said the Caterpillar contemptuously. &lsquo;Who are <i>you</i>?&rsquo;
		    </p>
		    <p>
		      Which brought them back again to the beginning of the conversation. Alice
		      felt a little irritated at the Caterpillar&rsquo;s making such <i>very</i> short
		      remarks, and she drew herself up and said, very gravely, &lsquo;I think, you
		      ought to tell me who <i>you</i> are, first.&rsquo;
		    </p>
		    <p>
		      &lsquo;Why?&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      Here was another puzzling question; and as Alice could not think of any
		      good reason, and as the Caterpillar seemed to be in a <i>very</i> unpleasant
		      state of mind, she turned away.
		    </p>
		    <p>
		      &lsquo;Come back!&rsquo; the Caterpillar called after her. &lsquo;I&rsquo;ve something important
		      to say!&rsquo;
		    </p>
		    <p>
		      This sounded promising, certainly: Alice turned and came back again.
		    </p>
		    <p>
		      &lsquo;Keep your temper,&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      &lsquo;Is that all?&rsquo; said Alice, swallowing down her anger as well as she could.
		    </p>
		    <p>
		      &lsquo;No,&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      Alice thought she might as well wait, as she had nothing else to do, and
		      perhaps after all it might tell her something worth hearing. For some
		      minutes it puffed away without speaking, but at last it unfolded its arms,
		      took the hookah out of its mouth again, and said, &lsquo;So you think you&rsquo;re
		      changed, do you?&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m afraid I am, sir,&rsquo; said Alice; &lsquo;I can&rsquo;t remember things as I used&mdash;and
		      I don&rsquo;t keep the same size for ten minutes together!&rsquo;
		    </p>
		    <p>
		      &lsquo;Can&rsquo;t remember <i>what</i> things?&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      &lsquo;Well, I&rsquo;ve tried to say &ldquo;How doth the little busy bee,&rdquo; but it all came
		      different!&rsquo; Alice replied in a very melancholy voice.
		    </p>
		    <p>
		      &lsquo;Repeat, &ldquo;<i>You are old, Father William</i>,&rdquo;&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      Alice folded her hands, and began:&mdash;
		    </p>
			<p class='aiw-william stanza'>
		   &lsquo;You are old, Father William,&rsquo; the young man said,
		    <br>
		    &lsquo;And your hair has become very white;
		    <br>
		   And yet you incessantly stand on your head&mdash;
		    <br>
		    Do you think, at your age, it is right?&rsquo;
		    </p>
		    <p class='aiw-william stanza'>
		   &lsquo;In my youth,&rsquo; Father William replied to his son,
		    <br>
		    &lsquo;I feared it might injure the brain;
		    <br>
		   But, now that I&rsquo;m perfectly sure I have none,
		    <br>
		    Why, I do it again and again.&rsquo;
		    </p>
		   <p class='aiw-william stanza'>
		   &lsquo;You are old,&rsquo; said the youth, &lsquo;as I mentioned before,
		    <br>
		    And have grown most uncommonly fat;
		    <br>
		   Yet you turned a back-somersault in at the door&mdash;
		    <br>
		    Pray, what is the reason of that?&rsquo;
		    </p>
		    <p class='aiw-william stanza'>
		   &lsquo;In my youth,&rsquo; said the sage, as he shook his grey locks,
		    <br>
		    &lsquo;I kept all my limbs very supple
		    <br>
		   By the use of this ointment&mdash;one shilling the box&mdash;
		    <br>
		    Allow me to sell you a couple?&rsquo;
		    </p>
		    <p class='aiw-william stanza'>
		   &lsquo;You are old,&rsquo; said the youth, &lsquo;and your jaws are too weak
		    <br>
		    For anything tougher than suet;
		    <br>
		   Yet you finished the goose, with the bones and the beak&mdash;
		    <br>
		    Pray how did you manage to do it?&rsquo;
		    </p>
		    <p class='aiw-william stanza'>
		   &lsquo;In my youth,&rsquo; said his father, &lsquo;I took to the law,
		    <br>
		    And argued each case with my wife;
		    <br>
		   And the muscular strength, which it gave to my jaw,
		    <br>
		    Has lasted the rest of my life.&rsquo;
		    </p>
		    <p class='aiw-william stanza'>
		   &lsquo;You are old,&rsquo; said the youth, &lsquo;one would hardly suppose
		    <br>
		    That your eye was as steady as ever;
		    <br>
		   Yet you balanced an eel on the end of your nose&mdash;
		    <br>
		    What made you so awfully clever?&rsquo;
		    </p>
		    <p class='aiw-william stanza'>
		   &lsquo;I have answered three questions, and that is enough,&rsquo;
		    <br>
		    Said his father; &lsquo;don&rsquo;t give yourself airs!
		    <br>
		   Do you think I can listen all day to such stuff?
		    <br>
		    Be off, or I&rsquo;ll kick you down stairs!&rsquo;
		    </p>
		    <p>
		      &lsquo;That is not said right,&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      &lsquo;Not <i>quite</i> right, I&rsquo;m afraid,&rsquo; said Alice, timidly; &lsquo;some of the words
		      have got altered.&rsquo;
		    </p>
		    <p>
		      &lsquo;It is wrong from beginning to end,&rsquo; said the Caterpillar decidedly, and
		      there was silence for some minutes.
		    </p>
		    <p>
		      The Caterpillar was the first to speak.
		    </p>
		    <p>
		      &lsquo;What size do you want to be?&rsquo; it asked.
		    </p>
		    <p>
		      &lsquo;Oh, I&rsquo;m not particular as to size,&rsquo; Alice hastily replied; &lsquo;only one
		      doesn&rsquo;t like changing so often, you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;I <i>don&rsquo;t</i> know,&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      Alice said nothing: she had never been so much contradicted in her life
		      before, and she felt that she was losing her temper.
		    </p>
		    <p>
		      &lsquo;Are you content now?&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      &lsquo;Well, I should like to be a <i>little</i> larger, sir, if you wouldn&rsquo;t mind,&rsquo;
		      said Alice: &lsquo;three inches is such a wretched height to be.&rsquo;
		    </p>
		    <p>
		      &lsquo;It is a very good height indeed!&rsquo; said the Caterpillar angrily, rearing
		      itself upright as it spoke (it was exactly three inches high).
		    </p>
		    <p>
		      &lsquo;But I&rsquo;m not used to it!&rsquo; pleaded poor Alice in a piteous tone. And she
		      thought of herself, &lsquo;I wish the creatures wouldn&rsquo;t be so easily offended!&rsquo;
		    </p>
		    <p>
		      &lsquo;You&rsquo;ll get used to it in time,&rsquo; said the Caterpillar; and it put the
		      hookah into its mouth and began smoking again.
		    </p>
		    <p>
		      This time Alice waited patiently until it chose to speak again. In a
		      minute or two the Caterpillar took the hookah out of its mouth and yawned
		      once or twice, and shook itself. Then it got down off the mushroom, and
		      crawled away in the grass, merely remarking as it went, &lsquo;One side will
		      make you grow taller, and the other side will make you grow shorter.&rsquo;
		    </p>
		    <p>
		      &lsquo;One side of <i>what</i>? The other side of <i>what</i>?&rsquo; thought Alice to herself.
		    </p>
		    <p>
		      &lsquo;Of the mushroom,&rsquo; said the Caterpillar, just as if she had asked it
		      aloud; and in another moment it was out of sight.
		    </p>
		    <p>
		      Alice remained looking thoughtfully at the mushroom for a minute, trying
		      to make out which were the two sides of it; and as it was perfectly round,
		      she found this a very difficult question. However, at last she stretched
		      her arms round it as far as they would go, and broke off a bit of the edge
		      with each hand.
		    </p>
		    <p>
		      &lsquo;And now which is which?&rsquo; she said to herself, and nibbled a little of the
		      right-hand bit to try the effect: the next moment she felt a violent blow
		      underneath her chin: it had struck her foot!
		    </p>
		    <p>
		      She was a good deal frightened by this very sudden change, but she felt
		      that there was no time to be lost, as she was shrinking rapidly; so she
		      set to work at once to eat some of the other bit. Her chin was pressed so
		      closely against her foot, that there was hardly room to open her mouth;
		      but she did it at last, and managed to swallow a morsel of the lefthand
		      bit.
			<p class='aiw-separator'>*****</p>
		      &lsquo;Come, my head&rsquo;s free at last!&rsquo; said Alice in a tone of delight, which
		      changed into alarm in another moment, when she found that her shoulders
		      were nowhere to be found: all she could see, when she looked down, was an
		      immense length of neck, which seemed to rise like a stalk out of a sea of
		      green leaves that lay far below her.
		    </p>
		    <p>
		      &lsquo;What <i>can</i> all that green stuff be?&rsquo; said Alice. &lsquo;And where <i>have</i> my
		      shoulders got to? And oh, my poor hands, how is it I can&rsquo;t see you?&rsquo; She
		      was moving them about as she spoke, but no result seemed to follow, except
		      a little shaking among the distant green leaves.
		    </p>
		    <p>
		      As there seemed to be no chance of getting her hands up to her head, she
		      tried to get her head down to them, and was delighted to find that her
		      neck would bend about easily in any direction, like a serpent. She had
		      just succeeded in curving it down into a graceful zigzag, and was going to
		      dive in among the leaves, which she found to be nothing but the tops of
		      the trees under which she had been wandering, when a sharp hiss made her
		      draw back in a hurry: a large pigeon had flown into her face, and was
		      beating her violently with its wings.
		    </p>
		    <p>
		      &lsquo;Serpent!&rsquo; screamed the Pigeon.
		    </p>
		    <p>
		      &lsquo;I&rsquo;m <i>not</i> a serpent!&rsquo; said Alice indignantly. &lsquo;Let me alone!&rsquo;
		    </p>
		    <p>
		      &lsquo;Serpent, I say again!&rsquo; repeated the Pigeon, but in a more subdued tone,
		      and added with a kind of sob, &lsquo;I&rsquo;ve tried every way, and nothing seems to
		      suit them!&rsquo;
		    </p>
		    <p>
		      &lsquo;I haven&rsquo;t the least idea what you&rsquo;re talking about,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;I&rsquo;ve tried the roots of trees, and I&rsquo;ve tried banks, and I&rsquo;ve tried
		      hedges,&rsquo; the Pigeon went on, without attending to her; &lsquo;but those
		      serpents! There&rsquo;s no pleasing them!&rsquo;
		    </p>
		    <p>
		      Alice was more and more puzzled, but she thought there was no use in
		      saying anything more till the Pigeon had finished.
		    </p>
		    <p>
		      &lsquo;As if it wasn&rsquo;t trouble enough hatching the eggs,&rsquo; said the Pigeon; &lsquo;but
		      I must be on the look-out for serpents night and day! Why, I haven&rsquo;t had a
		      wink of sleep these three weeks!&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m very sorry you&rsquo;ve been annoyed,&rsquo; said Alice, who was beginning to see
		      its meaning.
		    </p>
		    <p>
		      &lsquo;And just as I&rsquo;d taken the highest tree in the wood,&rsquo; continued the
		      Pigeon, raising its voice to a shriek, &lsquo;and just as I was thinking I
		      should be free of them at last, they must needs come wriggling down from
		      the sky! Ugh, Serpent!&rsquo;
		    </p>
		    <p>
		      &lsquo;But I&rsquo;m <i>not</i> a serpent, I tell you!&rsquo; said Alice. &lsquo;I&rsquo;m a&mdash;I&rsquo;m a&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Well! <i>What</i> are you?&rsquo; said the Pigeon. &lsquo;I can see you&rsquo;re trying to invent
		      something!&rsquo;
		    </p>
		    <p>
		      &lsquo;I&mdash;I&rsquo;m a little girl,&rsquo; said Alice, rather doubtfully, as she
		      remembered the number of changes she had gone through that day.
		    </p>
		    <p>
		      &lsquo;A likely story indeed!&rsquo; said the Pigeon in a tone of the deepest
		      contempt. &lsquo;I&rsquo;ve seen a good many little girls in my time, but never <i>one</i>
		      with such a neck as that! No, no! You&rsquo;re a serpent; and there&rsquo;s no use
		      denying it. I suppose you&rsquo;ll be telling me next that you never tasted an
		      egg!&rsquo;
		    </p>
		    <p>
		      &lsquo;I <i>have</i> tasted eggs, certainly,&rsquo; said Alice, who was a very truthful
		      child; &lsquo;but little girls eat eggs quite as much as serpents do, you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t believe it,&rsquo; said the Pigeon; &lsquo;but if they do, why then they&rsquo;re a
		      kind of serpent, that&rsquo;s all I can say.&rsquo;
		    </p>
		    <p>
		      This was such a new idea to Alice, that she was quite silent for a minute
		      or two, which gave the Pigeon the opportunity of adding, &lsquo;You&rsquo;re looking
		      for eggs, I know <i>that</i> well enough; and what does it matter to me whether
		      you&rsquo;re a little girl or a serpent?&rsquo;
		    </p>
		    <p>
		      &lsquo;It matters a good deal to <i>me</i>,&rsquo; said Alice hastily; &lsquo;but I&rsquo;m not looking
		      for eggs, as it happens; and if I was, I shouldn&rsquo;t want <i>yours</i>: I don&rsquo;t
		      like them raw.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, be off, then!&rsquo; said the Pigeon in a sulky tone, as it settled down
		      again into its nest. Alice crouched down among the trees as well as she
		      could, for her neck kept getting entangled among the branches, and every
		      now and then she had to stop and untwist it. After a while she remembered
		      that she still held the pieces of mushroom in her hands, and she set to
		      work very carefully, nibbling first at one and then at the other, and
		      growing sometimes taller and sometimes shorter, until she had succeeded in
		      bringing herself down to her usual height.
		    </p>
		    <p>
		      It was so long since she had been anything near the right size, that it
		      felt quite strange at first; but she got used to it in a few minutes, and
		      began talking to herself, as usual. &lsquo;Come, there&rsquo;s half my plan done now!
		      How puzzling all these changes are! I&rsquo;m never sure what I&rsquo;m going to be,
		      from one minute to another! However, I&rsquo;ve got back to my right size: the
		      next thing is, to get into that beautiful garden&mdash;how <i>is</i> that to be
		      done, I wonder?&rsquo; As she said this, she came suddenly upon an open place,
		      with a little house in it about four feet high. &lsquo;Whoever lives there,&rsquo;
		      thought Alice, &lsquo;it&rsquo;ll never do to come upon them <i>this</i> size: why, I should
		      frighten them out of their wits!&rsquo; So she began nibbling at the righthand
		      bit again, and did not venture to go near the house till she had brought
		      herself down to nine inches high.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Pig and Pepper",
			'number' => "Six",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      For a minute or two she stood looking at the house, and wondering what to
		      do next, when suddenly a footman in livery came running out of the wood&mdash;(she
		      considered him to be a footman because he was in livery: otherwise,
		      judging by his face only, she would have called him a fish)&mdash;and
		      rapped loudly at the door with his knuckles. It was opened by another
		      footman in livery, with a round face, and large eyes like a frog; and both
		      footmen, Alice noticed, had powdered hair that curled all over their
		      heads. She felt very curious to know what it was all about, and crept a
		      little way out of the wood to listen.
		    </p>
		    <p>
		      The Fish-Footman began by producing from under his arm a great letter,
		      nearly as large as himself, and this he handed over to the other, saying,
		      in a solemn tone, &lsquo;For the Duchess. An invitation from the Queen to play
		      croquet.&rsquo; The Frog-Footman repeated, in the same solemn tone, only
		      changing the order of the words a little, &lsquo;From the Queen. An invitation
		      for the Duchess to play croquet.&rsquo;
		    </p>
		    <p>
		      Then they both bowed low, and their curls got entangled together.
		    </p>
		    <p>
		      Alice laughed so much at this, that she had to run back into the wood for
		      fear of their hearing her; and when she next peeped out the Fish-Footman
		      was gone, and the other was sitting on the ground near the door, staring
		      stupidly up into the sky.
		    </p>
		    <p>
		      Alice went timidly up to the door, and knocked.
		    </p>
		    <p>
		      &lsquo;There&rsquo;s no sort of use in knocking,&rsquo; said the Footman, &lsquo;and that for two
		      reasons. First, because I&rsquo;m on the same side of the door as you are;
		      secondly, because they&rsquo;re making such a noise inside, no one could
		      possibly hear you.&rsquo; And certainly there <i>was</i> a most extraordinary noise
		      going on within&mdash;a constant howling and sneezing, and every now and
		      then a great crash, as if a dish or kettle had been broken to pieces.
		    </p>
		    <p>
		      &lsquo;Please, then,&rsquo; said Alice, &lsquo;how am I to get in?&rsquo;
		    </p>
		    <p>
		      &lsquo;There might be some sense in your knocking,&rsquo; the Footman went on without
		      attending to her, &lsquo;if we had the door between us. For instance, if you
		      were <i>inside</i>, you might knock, and I could let you out, you know.&rsquo; He was
		      looking up into the sky all the time he was speaking, and this Alice
		      thought decidedly uncivil. &lsquo;But perhaps he can&rsquo;t help it,&rsquo; she said to
		      herself; &lsquo;his eyes are so <i>very</i> nearly at the top of his head. But at any
		      rate he might answer questions.&mdash;How am I to get in?&rsquo; she repeated,
		      aloud.
		    </p>
		    <p>
		      &lsquo;I shall sit here,&rsquo; the Footman remarked, &lsquo;till tomorrow&mdash;&rsquo;
		    </p>
		    <p>
		      At this moment the door of the house opened, and a large plate came
		      skimming out, straight at the Footman&rsquo;s head: it just grazed his nose, and
		      broke to pieces against one of the trees behind him.
		    </p>
		    <p>
		      &lsquo;&mdash;or next day, maybe,&rsquo; the Footman continued in the same tone,
		      exactly as if nothing had happened.
		    </p>
		    <p>
		      &lsquo;How am I to get in?&rsquo; asked Alice again, in a louder tone.
		    </p>
		    <p>
		      &lsquo;<i>Are</i> you to get in at all?&rsquo; said the Footman. &lsquo;That&rsquo;s the first question,
		      you know.&rsquo;
		    </p>
		    <p>
		      It was, no doubt: only Alice did not like to be told so. &lsquo;It&rsquo;s really
		      dreadful,&rsquo; she muttered to herself, &lsquo;the way all the creatures argue. It&rsquo;s
		      enough to drive one crazy!&rsquo;
		    </p>
		    <p>
		      The Footman seemed to think this a good opportunity for repeating his
		      remark, with variations. &lsquo;I shall sit here,&rsquo; he said, &lsquo;on and off, for
		      days and days.&rsquo;
		    </p>
		    <p>
		      &lsquo;But what am <i>I</i> to do?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Anything you like,&rsquo; said the Footman, and began whistling.
		    </p>
		    <p>
		      &lsquo;Oh, there&rsquo;s no use in talking to him,&rsquo; said Alice desperately: &lsquo;he&rsquo;s
		      perfectly idiotic!&rsquo; And she opened the door and went in.
		    </p>
		    <p>
		      The door led right into a large kitchen, which was full of smoke from one
		      end to the other: the Duchess was sitting on a three-legged stool in the
		      middle, nursing a baby; the cook was leaning over the fire, stirring a
		      large cauldron which seemed to be full of soup.
		    </p>
		    <p>
		      &lsquo;There&rsquo;s certainly too much pepper in that soup!&rsquo; Alice said to herself,
		      as well as she could for sneezing.
		    </p>
		    <p>
		      There was certainly too much of it in the air. Even the Duchess sneezed
		      occasionally; and as for the baby, it was sneezing and howling alternately
		      without a moment&rsquo;s pause. The only things in the kitchen that did not
		      sneeze, were the cook, and a large cat which was sitting on the hearth and
		      grinning from ear to ear.
		    </p>
		    <p>
		      &lsquo;Please would you tell me,&rsquo; said Alice, a little timidly, for she was not
		      quite sure whether it was good manners for her to speak first, &lsquo;why your
		      cat grins like that?&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s a Cheshire cat,&rsquo; said the Duchess, &lsquo;and that&rsquo;s why. Pig!&rsquo;
		    </p>
		    <p>
		      She said the last word with such sudden violence that Alice quite jumped;
		      but she saw in another moment that it was addressed to the baby, and not
		      to her, so she took courage, and went on again:&mdash;
		    </p>
		    <p>
		      &lsquo;I didn&rsquo;t know that Cheshire cats always grinned; in fact, I didn&rsquo;t know
		      that cats <i>could</i> grin.&rsquo;
		    </p>
		    <p>
		      &lsquo;They all can,&rsquo; said the Duchess; &lsquo;and most of &lsquo;em do.&rsquo;
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t know of any that do,&rsquo; Alice said very politely, feeling quite
		      pleased to have got into a conversation.
		    </p>
		    <p>
		      &lsquo;You don&rsquo;t know much,&rsquo; said the Duchess; &lsquo;and that&rsquo;s a fact.&rsquo;
		    </p>
		    <p>
		      Alice did not at all like the tone of this remark, and thought it would be
		      as well to introduce some other subject of conversation. While she was
		      trying to fix on one, the cook took the cauldron of soup off the fire, and
		      at once set to work throwing everything within her reach at the Duchess
		      and the baby&mdash;the fire-irons came first; then followed a shower of
		      saucepans, plates, and dishes. The Duchess took no notice of them even
		      when they hit her; and the baby was howling so much already, that it was
		      quite impossible to say whether the blows hurt it or not.
		    </p>
		    <p>
		      &lsquo;Oh, <i>please</i> mind what you&rsquo;re doing!&rsquo; cried Alice, jumping up and down in
		      an agony of terror. &lsquo;Oh, there goes his <i>precious</i> nose&rsquo;; as an unusually
		      large saucepan flew close by it, and very nearly carried it off.
		    </p>
		    <p>
		      &lsquo;If everybody minded their own business,&rsquo; the Duchess said in a hoarse
		      growl, &lsquo;the world would go round a deal faster than it does.&rsquo;
		    </p>
		    <p>
		      &lsquo;Which would <i>not</i> be an advantage,&rsquo; said Alice, who felt very glad to get
		      an opportunity of showing off a little of her knowledge. &lsquo;Just think of
		      what work it would make with the day and night! You see the earth takes
		      twenty-four hours to turn round on its axis&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Talking of axes,&rsquo; said the Duchess, &lsquo;chop off her head!&rsquo;
		    </p>
		    <p>
		      Alice glanced rather anxiously at the cook, to see if she meant to take
		      the hint; but the cook was busily stirring the soup, and seemed not to be
		      listening, so she went on again: &lsquo;Twenty-four hours, I <i>think</i>; or is it
		      twelve? I&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, don&rsquo;t bother <i>me</i>,&rsquo; said the Duchess; &lsquo;I never could abide figures!&rsquo;
		      And with that she began nursing her child again, singing a sort of lullaby
		      to it as she did so, and giving it a violent shake at the end of every
		      line:
		    </p>
		    <p class='aiw-rough stanza'>
		   &lsquo;Speak roughly to your little boy,
		    <br>
		    And beat him when he sneezes:
		    <br>
		   He only does it to annoy,
		    <br>
		    Because he knows it teases.&rsquo;
		    </p>
		    <p class='aiw-chorus'>
		         CHORUS.
		    </p>
		    <p class='aiw-annotate'>
		 (In which the cook and the baby joined):&mdash;
		    </p>
		    <p class='aiw-wow'>
		       &lsquo;Wow! wow! wow!&rsquo;
		    </p>
		    <p>
		      While the Duchess sang the second verse of the song, she kept tossing the
		      baby violently up and down, and the poor little thing howled so, that
		      Alice could hardly hear the words:&mdash;
		    </p>
		    <p class='aiw-severe stanza'>
		   &lsquo;I speak severely to my boy,
		    <br>
		    I beat him when he sneezes;
		    <br>
		   For he can thoroughly enjoy
		    <br>
		    The pepper when he pleases!&rsquo;
		    </p>
		    <p class='aiw-chorus'>
		         CHORUS.
		    </p>
		    <p class='aiw-wow'>
		       &lsquo;Wow! wow! wow!&rsquo;
		    </p>
		    <p>
		      &lsquo;Here! you may nurse it a bit, if you like!&rsquo; the Duchess said to Alice,
		      flinging the baby at her as she spoke. &lsquo;I must go and get ready to play
		      croquet with the Queen,&rsquo; and she hurried out of the room. The cook threw a
		      frying-pan after her as she went out, but it just missed her.
		    </p>
		    <p>
		      Alice caught the baby with some difficulty, as it was a queer-shaped
		      little creature, and held out its arms and legs in all directions, &lsquo;just
		      like a star-fish,&rsquo; thought Alice. The poor little thing was snorting like
		      a steam-engine when she caught it, and kept doubling itself up and
		      straightening itself out again, so that altogether, for the first minute
		      or two, it was as much as she could do to hold it.
		    </p>
		    <p>
		      As soon as she had made out the proper way of nursing it, (which was to
		      twist it up into a sort of knot, and then keep tight hold of its right ear
		      and left foot, so as to prevent its undoing itself,) she carried it out
		      into the open air. &lsquo;If I don&rsquo;t take this child away with me,&rsquo; thought
		      Alice, &lsquo;they&rsquo;re sure to kill it in a day or two: wouldn&rsquo;t it be murder to
		      leave it behind?&rsquo; She said the last words out loud, and the little thing
		      grunted in reply (it had left off sneezing by this time). &lsquo;Don&rsquo;t grunt,&rsquo;
		      said Alice; &lsquo;that&rsquo;s not at all a proper way of expressing yourself.&rsquo;
		    </p>
		    <p>
		      The baby grunted again, and Alice looked very anxiously into its face to
		      see what was the matter with it. There could be no doubt that it had a
		      <i>very</i> turn-up nose, much more like a snout than a real nose; also its eyes
		      were getting extremely small for a baby: altogether Alice did not like the
		      look of the thing at all. &lsquo;But perhaps it was only sobbing,&rsquo; she thought,
		      and looked into its eyes again, to see if there were any tears.
		    </p>
		    <p>
		      No, there were no tears. &lsquo;If you&rsquo;re going to turn into a pig, my dear,&rsquo;
		      said Alice, seriously, &lsquo;I&rsquo;ll have nothing more to do with you. Mind now!&rsquo;
		      The poor little thing sobbed again (or grunted, it was impossible to say
		      which), and they went on for some while in silence.
		    </p>
		    <p>
		      Alice was just beginning to think to herself, &lsquo;Now, what am I to do with
		      this creature when I get it home?&rsquo; when it grunted again, so violently,
		      that she looked down into its face in some alarm. This time there could be
		      <i>no</i> mistake about it: it was neither more nor less than a pig, and she felt
		      that it would be quite absurd for her to carry it further.
		    </p>
		    <p>
		      So she set the little creature down, and felt quite relieved to see it
		      trot away quietly into the wood. &lsquo;If it had grown up,&rsquo; she said to
		      herself, &lsquo;it would have made a dreadfully ugly child: but it makes rather
		      a handsome pig, I think.&rsquo; And she began thinking over other children she
		      knew, who might do very well as pigs, and was just saying to herself, &lsquo;if
		      one only knew the right way to change them&mdash;&rsquo; when she was a little
		      startled by seeing the Cheshire Cat sitting on a bough of a tree a few
		      yards off.
		    </p>
		    <p>
		      The Cat only grinned when it saw Alice. It looked good-natured, she
		      thought: still it had <i>very</i> long claws and a great many teeth, so she felt
		      that it ought to be treated with respect.
		    </p>
		    <p>
		      &lsquo;Cheshire Puss,&rsquo; she began, rather timidly, as she did not at all know
		      whether it would like the name: however, it only grinned a little wider.
		      &lsquo;Come, it&rsquo;s pleased so far,&rsquo; thought Alice, and she went on. &lsquo;Would you
		      tell me, please, which way I ought to go from here?&rsquo;
		    </p>
		    <p>
		      &lsquo;That depends a good deal on where you want to get to,&rsquo; said the Cat.
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t much care where&mdash;&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Then it doesn&rsquo;t matter which way you go,&rsquo; said the Cat.
		    </p>
		    <p>
		      &lsquo;&mdash;so long as I get <i>somewhere</i>,&rsquo; Alice added as an explanation.
		    </p>
		    <p>
		      &lsquo;Oh, you&rsquo;re sure to do that,&rsquo; said the Cat, &lsquo;if you only walk long
		      enough.&rsquo;
		    </p>
		    <p>
		      Alice felt that this could not be denied, so she tried another question.
		      &lsquo;What sort of people live about here?&rsquo;
		    </p>
		    <p>
		      &lsquo;In <i>that</i> direction,&rsquo; the Cat said, waving its right paw round, &lsquo;lives a
		      Hatter: and in <i>that</i> direction,&rsquo; waving the other paw, &lsquo;lives a March Hare.
		      Visit either you like: they&rsquo;re both mad.&rsquo;
		    </p>
		    <p>
		      &lsquo;But I don&rsquo;t want to go among mad people,&rsquo; Alice remarked.
		    </p>
		    <p>
		      &lsquo;Oh, you can&rsquo;t help that,&rsquo; said the Cat: &lsquo;we&rsquo;re all mad here. I&rsquo;m mad.
		      You&rsquo;re mad.&rsquo;
		    </p>
		    <p>
		      &lsquo;How do you know I&rsquo;m mad?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;You must be,&rsquo; said the Cat, &lsquo;or you wouldn&rsquo;t have come here.&rsquo;
		    </p>
		    <p>
		      Alice didn&rsquo;t think that proved it at all; however, she went on &lsquo;And how do
		      you know that you&rsquo;re mad?&rsquo;
		    </p>
		    <p>
		      &lsquo;To begin with,&rsquo; said the Cat, &lsquo;a dog&rsquo;s not mad. You grant that?&rsquo;
		    </p>
		    <p>
		      &lsquo;I suppose so,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Well, then,&rsquo; the Cat went on, &lsquo;you see, a dog growls when it&rsquo;s angry, and
		      wags its tail when it&rsquo;s pleased. Now <i>I</i> growl when I&rsquo;m pleased, and wag my
		      tail when I&rsquo;m angry. Therefore I&rsquo;m mad.&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>I</i> call it purring, not growling,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Call it what you like,&rsquo; said the Cat. &lsquo;Do you play croquet with the Queen
		      to-day?&rsquo;
		    </p>
		    <p>
		      &lsquo;I should like it very much,&rsquo; said Alice, &lsquo;but I haven&rsquo;t been invited
		      yet.&rsquo;
		    </p>
		    <p>
		      &lsquo;You&rsquo;ll see me there,&rsquo; said the Cat, and vanished.
		    </p>
		    <p>
		      Alice was not much surprised at this, she was getting so used to queer
		      things happening. While she was looking at the place where it had been, it
		      suddenly appeared again.
		    </p>
		    <p>
		      &lsquo;By-the-bye, what became of the baby?&rsquo; said the Cat. &lsquo;I&rsquo;d nearly forgotten
		      to ask.&rsquo;
		    </p>
		    <p>
		      &lsquo;It turned into a pig,&rsquo; Alice quietly said, just as if it had come back in
		      a natural way.
		    </p>
		    <p>
		      &lsquo;I thought it would,&rsquo; said the Cat, and vanished again.
		    </p>
		    <p>
		      Alice waited a little, half expecting to see it again, but it did not
		      appear, and after a minute or two she walked on in the direction in which
		      the March Hare was said to live. &lsquo;I&rsquo;ve seen hatters before,&rsquo; she said to
		      herself; &lsquo;the March Hare will be much the most interesting, and perhaps as
		      this is May it won&rsquo;t be raving mad&mdash;at least not so mad as it was in
		      March.&rsquo; As she said this, she looked up, and there was the Cat again,
		      sitting on a branch of a tree.
		    </p>
		    <p>
		      &lsquo;Did you say pig, or fig?&rsquo; said the Cat.
		    </p>
		    <p>
		      &lsquo;I said pig,&rsquo; replied Alice; &lsquo;and I wish you wouldn&rsquo;t keep appearing and
		      vanishing so suddenly: you make one quite giddy.&rsquo;
		    </p>
		    <p>
		      &lsquo;All right,&rsquo; said the Cat; and this time it vanished quite slowly,
		      beginning with the end of the tail, and ending with the grin, which
		      remained some time after the rest of it had gone.
		    </p>
		    <p>
		      &lsquo;Well! I&rsquo;ve often seen a cat without a grin,&rsquo; thought Alice; &lsquo;but a grin
		      without a cat! It&rsquo;s the most curious thing I ever saw in my life!&rsquo;
		    </p>
		    <p>
		      She had not gone much farther before she came in sight of the house of the
		      March Hare: she thought it must be the right house, because the chimneys
		      were shaped like ears and the roof was thatched with fur. It was so large
		      a house, that she did not like to go nearer till she had nibbled some more
		      of the lefthand bit of mushroom, and raised herself to about two feet
		      high: even then she walked up towards it rather timidly, saying to herself
		      &lsquo;Suppose it should be raving mad after all! I almost wish I&rsquo;d gone to see
		      the Hatter instead!&rsquo;
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "A Mad Tea-Party",
			'number' => "Seven",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      There was a table set out under a tree in front of the house, and the
		      March Hare and the Hatter were having tea at it: a Dormouse was sitting
		      between them, fast asleep, and the other two were using it as a cushion,
		      resting their elbows on it, and talking over its head. &lsquo;Very uncomfortable
		      for the Dormouse,&rsquo; thought Alice; &lsquo;only, as it&rsquo;s asleep, I suppose it
		      doesn&rsquo;t mind.&rsquo;
		    </p>
		    <p>
		      The table was a large one, but the three were all crowded together at one
		      corner of it: &lsquo;No room! No room!&rsquo; they cried out when they saw Alice
		      coming. &lsquo;There&rsquo;s <i>plenty</i> of room!&rsquo; said Alice indignantly, and she sat down
		      in a large arm-chair at one end of the table.
		    </p>
		    <p>
		      &lsquo;Have some wine,&rsquo; the March Hare said in an encouraging tone.
		    </p>
		    <p>
		      Alice looked all round the table, but there was nothing on it but tea. &lsquo;I
		      don&rsquo;t see any wine,&rsquo; she remarked.
		    </p>
		    <p>
		      &lsquo;There isn&rsquo;t any,&rsquo; said the March Hare.
		    </p>
		    <p>
		      &lsquo;Then it wasn&rsquo;t very civil of you to offer it,&rsquo; said Alice angrily.
		    </p>
		    <p>
		      &lsquo;It wasn&rsquo;t very civil of you to sit down without being invited,&rsquo; said the
		      March Hare.
		    </p>
		    <p>
		      &lsquo;I didn&rsquo;t know it was <i>your</i> table,&rsquo; said Alice; &lsquo;it&rsquo;s laid for a great many
		      more than three.&rsquo;
		    </p>
		    <p>
		      &lsquo;Your hair wants cutting,&rsquo; said the Hatter. He had been looking at Alice
		      for some time with great curiosity, and this was his first speech.
		    </p>
		    <p>
		      &lsquo;You should learn not to make personal remarks,&rsquo; Alice said with some
		      severity; &lsquo;it&rsquo;s very rude.&rsquo;
		    </p>
		    <p>
		      The Hatter opened his eyes very wide on hearing this; but all he <i>said</i> was,
		      &lsquo;Why is a raven like a writing-desk?&rsquo;
		    </p>
		    <p>
		      &lsquo;Come, we shall have some fun now!&rsquo; thought Alice. &lsquo;I&rsquo;m glad they&rsquo;ve begun
		      asking riddles.&mdash;I believe I can guess that,&rsquo; she added aloud.
		    </p>
		    <p>
		      &lsquo;Do you mean that you think you can find out the answer to it?&rsquo; said the
		      March Hare.
		    </p>
		    <p>
		      &lsquo;Exactly so,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Then you should say what you mean,&rsquo; the March Hare went on.
		    </p>
		    <p>
		      &lsquo;I do,&rsquo; Alice hastily replied; &lsquo;at least&mdash;at least I mean what I say&mdash;that&rsquo;s
		      the same thing, you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;Not the same thing a bit!&rsquo; said the Hatter. &lsquo;You might just as well say
		      that &ldquo;I see what I eat&rdquo; is the same thing as &ldquo;I eat what I see&rdquo;!&rsquo;
		    </p>
		    <p>
		      &lsquo;You might just as well say,&rsquo; added the March Hare, &lsquo;that &ldquo;I like what I
		      get&rdquo; is the same thing as &ldquo;I get what I like&rdquo;!&rsquo;
		    </p>
		    <p>
		      &lsquo;You might just as well say,&rsquo; added the Dormouse, who seemed to be talking
		      in his sleep, &lsquo;that &ldquo;I breathe when I sleep&rdquo; is the same thing as &ldquo;I sleep
		      when I breathe&rdquo;!&rsquo;
		    </p>
		    <p>
		      &lsquo;It <i>is</i> the same thing with you,&rsquo; said the Hatter, and here the
		      conversation dropped, and the party sat silent for a minute, while Alice
		      thought over all she could remember about ravens and writing-desks, which
		      wasn&rsquo;t much.
		    </p>
		    <p>
		      The Hatter was the first to break the silence. &lsquo;What day of the month is
		      it?&rsquo; he said, turning to Alice: he had taken his watch out of his pocket,
		      and was looking at it uneasily, shaking it every now and then, and holding
		      it to his ear.
		    </p>
		    <p>
		      Alice considered a little, and then said &lsquo;The fourth.&rsquo;
		    </p>
		    <p>
		      &lsquo;Two days wrong!&rsquo; sighed the Hatter. &lsquo;I told you butter wouldn&rsquo;t suit the
		      works!&rsquo; he added looking angrily at the March Hare.
		    </p>
		    <p>
		      &lsquo;It was the <i>best</i> butter,&rsquo; the March Hare meekly replied.
		    </p>
		    <p>
		      &lsquo;Yes, but some crumbs must have got in as well,&rsquo; the Hatter grumbled: &lsquo;you
		      shouldn&rsquo;t have put it in with the bread-knife.&rsquo;
		    </p>
		    <p>
		      The March Hare took the watch and looked at it gloomily: then he dipped it
		      into his cup of tea, and looked at it again: but he could think of nothing
		      better to say than his first remark, &lsquo;It was the <i>best</i> butter, you know.&rsquo;
		    </p>
		    <p>
		      Alice had been looking over his shoulder with some curiosity. &lsquo;What a
		      funny watch!&rsquo; she remarked. &lsquo;It tells the day of the month, and doesn&rsquo;t
		      tell what o&rsquo;clock it is!&rsquo;
		    </p>
		    <p>
		      &lsquo;Why should it?&rsquo; muttered the Hatter. &lsquo;Does <i>your</i> watch tell you what year
		      it is?&rsquo;
		    </p>
		    <p>
		      &lsquo;Of course not,&rsquo; Alice replied very readily: &lsquo;but that&rsquo;s because it stays
		      the same year for such a long time together.&rsquo;
		    </p>
		    <p>
		      &lsquo;Which is just the case with <i>mine</i>,&rsquo; said the Hatter.
		    </p>
		    <p>
		      Alice felt dreadfully puzzled. The Hatter&rsquo;s remark seemed to have no sort
		      of meaning in it, and yet it was certainly English. &lsquo;I don&rsquo;t quite
		      understand you,&rsquo; she said, as politely as she could.
		    </p>
		    <p>
		      &lsquo;The Dormouse is asleep again,&rsquo; said the Hatter, and he poured a little
		      hot tea upon its nose.
		    </p>
		    <p>
		      The Dormouse shook its head impatiently, and said, without opening its
		      eyes, &lsquo;Of course, of course; just what I was going to remark myself.&rsquo;
		    </p>
		    <p>
		      &lsquo;Have you guessed the riddle yet?&rsquo; the Hatter said, turning to Alice
		      again.
		    </p>
		    <p>
		      &lsquo;No, I give it up,&rsquo; Alice replied: &lsquo;what&rsquo;s the answer?&rsquo;
		    </p>
		    <p>
		      &lsquo;I haven&rsquo;t the slightest idea,&rsquo; said the Hatter.
		    </p>
		    <p>
		      &lsquo;Nor I,&rsquo; said the March Hare.
		    </p>
		    <p>
		      Alice sighed wearily. &lsquo;I think you might do something better with the
		      time,&rsquo; she said, &lsquo;than waste it in asking riddles that have no answers.&rsquo;
		    </p>
		    <p>
		      &lsquo;If you knew Time as well as I do,&rsquo; said the Hatter, &lsquo;you wouldn&rsquo;t talk
		      about wasting <i>it</i>. It&rsquo;s <i>him</i>.&rsquo;
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t know what you mean,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Of course you don&rsquo;t!&rsquo; the Hatter said, tossing his head contemptuously.
		      &lsquo;I dare say you never even spoke to Time!&rsquo;
		    </p>
		    <p>
		      &lsquo;Perhaps not,&rsquo; Alice cautiously replied: &lsquo;but I know I have to beat time
		      when I learn music.&rsquo;
		    </p>
		    <p>
		      &lsquo;Ah! that accounts for it,&rsquo; said the Hatter. &lsquo;He won&rsquo;t stand beating. Now,
		      if you only kept on good terms with him, he&rsquo;d do almost anything you liked
		      with the clock. For instance, suppose it were nine o&rsquo;clock in the morning,
		      just time to begin lessons: you&rsquo;d only have to whisper a hint to Time, and
		      round goes the clock in a twinkling! Half-past one, time for dinner!&rsquo;
		    </p>
		    <p>
		      (&lsquo;I only wish it was,&rsquo; the March Hare said to itself in a whisper.)
		    </p>
		    <p>
		      &lsquo;That would be grand, certainly,&rsquo; said Alice thoughtfully: &lsquo;but then&mdash;I
		      shouldn&rsquo;t be hungry for it, you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;Not at first, perhaps,&rsquo; said the Hatter: &lsquo;but you could keep it to
		      half-past one as long as you liked.&rsquo;
		    </p>
		    <p>
		      &lsquo;Is that the way <i>you</i> manage?&rsquo; Alice asked.
		    </p>
		    <p>
		      The Hatter shook his head mournfully. &lsquo;Not I!&rsquo; he replied. &lsquo;We quarrelled
		      last March&mdash;just before <i>he</i> went mad, you know&mdash;&rsquo; (pointing with
		      his tea spoon at the March Hare,) &lsquo;&mdash;it was at the great concert
		      given by the Queen of Hearts, and I had to sing
		    </p>
		    <p class='aiw-twinkle stanza'>
		     &ldquo;Twinkle, twinkle, little bat!
		    <br>
		     How I wonder what you&rsquo;re at!&rdquo;
		    </p>
		    <p>
		      You know the song, perhaps?&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;ve heard something like it,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;It goes on, you know,&rsquo; the Hatter continued, &lsquo;in this way:&mdash;
		    </p>
		    <p class='aiw-world stanza'>
		     &ldquo;Up above the world you fly,
		    <br>
		     Like a tea-tray in the sky.
		         Twinkle, twinkle&mdash;&ldquo;&rsquo;
		    </p>
		    <p>
		      Here the Dormouse shook itself, and began singing in its sleep &lsquo;<i>Twinkle,
		      twinkle, twinkle, twinkle</i>&mdash;&rsquo; and went on so long that they had to
		      pinch it to make it stop.
		    </p>
		    <p>
		      &lsquo;Well, I&rsquo;d hardly finished the first verse,&rsquo; said the Hatter, &lsquo;when the
		      Queen jumped up and bawled out, &ldquo;He&rsquo;s murdering the time! Off with his
		      head!&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;How dreadfully savage!&rsquo; exclaimed Alice.
		    </p>
		    <p>
		      &lsquo;And ever since that,&rsquo; the Hatter went on in a mournful tone, &lsquo;he won&rsquo;t do
		      a thing I ask! It&rsquo;s always six o&rsquo;clock now.&rsquo;
		    </p>
		    <p>
		      A bright idea came into Alice&rsquo;s head. &lsquo;Is that the reason so many
		      tea-things are put out here?&rsquo; she asked.
		    </p>
		    <p>
		      &lsquo;Yes, that&rsquo;s it,&rsquo; said the Hatter with a sigh: &lsquo;it&rsquo;s always tea-time, and
		      we&rsquo;ve no time to wash the things between whiles.&rsquo;
		    </p>
		    <p>
		      &lsquo;Then you keep moving round, I suppose?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Exactly so,&rsquo; said the Hatter: &lsquo;as the things get used up.&rsquo;
		    </p>
		    <p>
		      &lsquo;But what happens when you come to the beginning again?&rsquo; Alice ventured to
		      ask.
		    </p>
		    <p>
		      &lsquo;Suppose we change the subject,&rsquo; the March Hare interrupted, yawning. &lsquo;I&rsquo;m
		      getting tired of this. I vote the young lady tells us a story.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m afraid I don&rsquo;t know one,&rsquo; said Alice, rather alarmed at the proposal.
		    </p>
		    <p>
		      &lsquo;Then the Dormouse shall!&rsquo; they both cried. &lsquo;Wake up, Dormouse!&rsquo; And they
		      pinched it on both sides at once.
		    </p>
		    <p>
		      The Dormouse slowly opened his eyes. &lsquo;I wasn&rsquo;t asleep,&rsquo; he said in a
		      hoarse, feeble voice: &lsquo;I heard every word you fellows were saying.&rsquo;
		    </p>
		    <p>
		      &lsquo;Tell us a story!&rsquo; said the March Hare.
		    </p>
		    <p>
		      &lsquo;Yes, please do!&rsquo; pleaded Alice.
		    </p>
		    <p>
		      &lsquo;And be quick about it,&rsquo; added the Hatter, &lsquo;or you&rsquo;ll be asleep again
		      before it&rsquo;s done.&rsquo;
		    </p>
		    <p>
		      &lsquo;Once upon a time there were three little sisters,&rsquo; the Dormouse began in
		      a great hurry; &lsquo;and their names were Elsie, Lacie, and Tillie; and they
		      lived at the bottom of a well&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;What did they live on?&rsquo; said Alice, who always took a great interest in
		      questions of eating and drinking.
		    </p>
		    <p>
		      &lsquo;They lived on treacle,&rsquo; said the Dormouse, after thinking a minute or
		      two.
		    </p>
		    <p>
		      &lsquo;They couldn&rsquo;t have done that, you know,&rsquo; Alice gently remarked; &lsquo;they&rsquo;d
		      have been ill.&rsquo;
		    </p>
		    <p>
		      &lsquo;So they were,&rsquo; said the Dormouse; &lsquo;<i>very</i> ill.&rsquo;
		    </p>
		    <p>
		      Alice tried to fancy to herself what such an extraordinary ways of living
		      would be like, but it puzzled her too much, so she went on: &lsquo;But why did
		      they live at the bottom of a well?&rsquo;
		    </p>
		    <p>
		      &lsquo;Take some more tea,&rsquo; the March Hare said to Alice, very earnestly.
		    </p>
		    <p>
		      &lsquo;I&rsquo;ve had nothing yet,&rsquo; Alice replied in an offended tone, &lsquo;so I can&rsquo;t
		      take more.&rsquo;
		    </p>
		    <p>
		      &lsquo;You mean you can&rsquo;t take <i>less</i>,&rsquo; said the Hatter: &lsquo;it&rsquo;s very easy to take
		      <i>more</i> than nothing.&rsquo;
		    </p>
		    <p>
		      &lsquo;Nobody asked <i>your</i> opinion,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Who&rsquo;s making personal remarks now?&rsquo; the Hatter asked triumphantly.
		    </p>
		    <p>
		      Alice did not quite know what to say to this: so she helped herself to
		      some tea and bread-and-butter, and then turned to the Dormouse, and
		      repeated her question. &lsquo;Why did they live at the bottom of a well?&rsquo;
		    </p>
		    <p>
		      The Dormouse again took a minute or two to think about it, and then said,
		      &lsquo;It was a treacle-well.&rsquo;
		    </p>
		    <p>
		      &lsquo;There&rsquo;s no such thing!&rsquo; Alice was beginning very angrily, but the Hatter
		      and the March Hare went &lsquo;Sh! sh!&rsquo; and the Dormouse sulkily remarked, &lsquo;If
		      you can&rsquo;t be civil, you&rsquo;d better finish the story for yourself.&rsquo;
		    </p>
		    <p>
		      &lsquo;No, please go on!&rsquo; Alice said very humbly; &lsquo;I won&rsquo;t interrupt again. I
		      dare say there may be <i>one</i>.&rsquo;
		    </p>
		    <p>
		      &lsquo;One, indeed!&rsquo; said the Dormouse indignantly. However, he consented to go
		      on. &lsquo;And so these three little sisters&mdash;they were learning to draw,
		      you know&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;What did they draw?&rsquo; said Alice, quite forgetting her promise.
		    </p>
		    <p>
		      &lsquo;Treacle,&rsquo; said the Dormouse, without considering at all this time.
		    </p>
		    <p>
		      &lsquo;I want a clean cup,&rsquo; interrupted the Hatter: &lsquo;let&rsquo;s all move one place
		      on.&rsquo;
		    </p>
		    <p>
		      He moved on as he spoke, and the Dormouse followed him: the March Hare
		      moved into the Dormouse&rsquo;s place, and Alice rather unwillingly took the
		      place of the March Hare. The Hatter was the only one who got any advantage
		      from the change: and Alice was a good deal worse off than before, as the
		      March Hare had just upset the milk-jug into his plate.
		    </p>
		    <p>
		      Alice did not wish to offend the Dormouse again, so she began very
		      cautiously: &lsquo;But I don&rsquo;t understand. Where did they draw the treacle
		      from?&rsquo;
		    </p>
		    <p>
		      &lsquo;You can draw water out of a water-well,&rsquo; said the Hatter; &lsquo;so I should
		      think you could draw treacle out of a treacle-well&mdash;eh, stupid?&rsquo;
		    </p>
		    <p>
		      &lsquo;But they were <i>in</i> the well,&rsquo; Alice said to the Dormouse, not choosing to
		      notice this last remark.
		    </p>
		    <p>
		      &lsquo;Of course they were&rsquo;, said the Dormouse; &lsquo;&mdash;well in.&rsquo;
		    </p>
		    <p>
		      This answer so confused poor Alice, that she let the Dormouse go on for
		      some time without interrupting it.
		    </p>
		    <p>
		      &lsquo;They were learning to draw,&rsquo; the Dormouse went on, yawning and rubbing
		      its eyes, for it was getting very sleepy; &lsquo;and they drew all manner of
		      things&mdash;everything that begins with an M&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Why with an M?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Why not?&rsquo; said the March Hare.
		    </p>
		    <p>
		      Alice was silent.
		    </p>
		    <p>
		      The Dormouse had closed its eyes by this time, and was going off into a
		      doze; but, on being pinched by the Hatter, it woke up again with a little
		      shriek, and went on: &lsquo;&mdash;that begins with an M, such as mouse-traps,
		      and the moon, and memory, and muchness&mdash;you know you say things are
		      &ldquo;much of a muchness&rdquo;&mdash;did you ever see such a thing as a drawing of a
		      muchness?&rsquo;
		    </p>
		    <p>
		      &lsquo;Really, now you ask me,&rsquo; said Alice, very much confused, &lsquo;I don&rsquo;t think&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Then you shouldn&rsquo;t talk,&rsquo; said the Hatter.
		    </p>
		    <p>
		      This piece of rudeness was more than Alice could bear: she got up in great
		      disgust, and walked off; the Dormouse fell asleep instantly, and neither
		      of the others took the least notice of her going, though she looked back
		      once or twice, half hoping that they would call after her: the last time
		      she saw them, they were trying to put the Dormouse into the teapot.
		    </p>
		    <p>
		      &lsquo;At any rate I&rsquo;ll never go <i>there</i> again!&rsquo; said Alice as she picked her way
		      through the wood. &lsquo;It&rsquo;s the stupidest tea-party I ever was at in all my
		      life!&rsquo;
		    </p>
		    <p>
		      Just as she said this, she noticed that one of the trees had a door
		      leading right into it. &lsquo;That&rsquo;s very curious!&rsquo; she thought. &lsquo;But
		      everything&rsquo;s curious today. I think I may as well go in at once.&rsquo; And in
		      she went.
		    </p>
		    <p>
		      Once more she found herself in the long hall, and close to the little
		      glass table. &lsquo;Now, I&rsquo;ll manage better this time,&rsquo; she said to herself, and
		      began by taking the little golden key, and unlocking the door that led
		      into the garden. Then she went to work nibbling at the mushroom (she had
		      kept a piece of it in her pocket) till she was about a foot high: then she
		      walked down the little passage: and <i>then</i>&mdash;she found herself at last
		      in the beautiful garden, among the bright flower-beds and the cool
		      fountains.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "The Queen’s Croquet-Ground",
			'number' => "Eight",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      A large rose-tree stood near the entrance of the garden: the roses growing
		      on it were white, but there were three gardeners at it, busily painting
		      them red. Alice thought this a very curious thing, and she went nearer to
		      watch them, and just as she came up to them she heard one of them say,
		      &lsquo;Look out now, Five! Don&rsquo;t go splashing paint over me like that!&rsquo;
		    </p>
		    <p>
		      &lsquo;I couldn&rsquo;t help it,&rsquo; said Five, in a sulky tone; &lsquo;Seven jogged my elbow.&rsquo;
		    </p>
		    <p>
		      On which Seven looked up and said, &lsquo;That&rsquo;s right, Five! Always lay the
		      blame on others!&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>You&rsquo;d</i> better not talk!&rsquo; said Five. &lsquo;I heard the Queen say only yesterday
		      you deserved to be beheaded!&rsquo;
		    </p>
		    <p>
		      &lsquo;What for?&rsquo; said the one who had spoken first.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s none of <i>your</i> business, Two!&rsquo; said Seven.
		    </p>
		    <p>
		      &lsquo;Yes, it <i>is</i> his business!&rsquo; said Five, &lsquo;and I&rsquo;ll tell him&mdash;it was for
		      bringing the cook tulip-roots instead of onions.&rsquo;
		    </p>
		    <p>
		      Seven flung down his brush, and had just begun &lsquo;Well, of all the unjust
		      things&mdash;&rsquo; when his eye chanced to fall upon Alice, as she stood
		      watching them, and he checked himself suddenly: the others looked round
		      also, and all of them bowed low.
		    </p>
		    <p>
		      &lsquo;Would you tell me,&rsquo; said Alice, a little timidly, &lsquo;why you are painting
		      those roses?&rsquo;
		    </p>
		    <p>
		      Five and Seven said nothing, but looked at Two. Two began in a low voice,
		      &lsquo;Why the fact is, you see, Miss, this here ought to have been a <i>red</i>
		      rose-tree, and we put a white one in by mistake; and if the Queen was to
		      find it out, we should all have our heads cut off, you know. So you see,
		      Miss, we&rsquo;re doing our best, afore she comes, to&mdash;&rsquo; At this moment
		      Five, who had been anxiously looking across the garden, called out &lsquo;The
		      Queen! The Queen!&rsquo; and the three gardeners instantly threw themselves flat
		      upon their faces. There was a sound of many footsteps, and Alice looked
		      round, eager to see the Queen.
		    </p>
		    <p>
		      First came ten soldiers carrying clubs; these were all shaped like the
		      three gardeners, oblong and flat, with their hands and feet at the
		      corners: next the ten courtiers; these were ornamented all over with
		      diamonds, and walked two and two, as the soldiers did. After these came
		      the royal children; there were ten of them, and the little dears came
		      jumping merrily along hand in hand, in couples: they were all ornamented
		      with hearts. Next came the guests, mostly Kings and Queens, and among them
		      Alice recognised the White Rabbit: it was talking in a hurried nervous
		      manner, smiling at everything that was said, and went by without noticing
		      her. Then followed the Knave of Hearts, carrying the King&rsquo;s crown on a
		      crimson velvet cushion; and, last of all this grand procession, came <span class='aiw-hearts'>THE
		      KING AND QUEEN OF HEARTS</span>.
		    </p>
		    <p>
		      Alice was rather doubtful whether she ought not to lie down on her face
		      like the three gardeners, but she could not remember ever having heard of
		      such a rule at processions; &lsquo;and besides, what would be the use of a
		      procession,&rsquo; thought she, &lsquo;if people had all to lie down upon their faces,
		      so that they couldn&rsquo;t see it?&rsquo; So she stood still where she was, and
		      waited.
		    </p>
		    <p>
		      When the procession came opposite to Alice, they all stopped and looked at
		      her, and the Queen said severely &lsquo;Who is this?&rsquo; She said it to the Knave
		      of Hearts, who only bowed and smiled in reply.
		    </p>
		    <p>
		      &lsquo;Idiot!&rsquo; said the Queen, tossing her head impatiently; and, turning to
		      Alice, she went on, &lsquo;What&rsquo;s your name, child?&rsquo;
		    </p>
		    <p>
		      &lsquo;My name is Alice, so please your Majesty,&rsquo; said Alice very politely; but
		      she added, to herself, &lsquo;Why, they&rsquo;re only a pack of cards, after all. I
		      needn&rsquo;t be afraid of them!&rsquo;
		    </p>
		    <p>
		      &lsquo;And who are <i>these</i>?&rsquo; said the Queen, pointing to the three gardeners who
		      were lying round the rosetree; for, you see, as they were lying on their
		      faces, and the pattern on their backs was the same as the rest of the
		      pack, she could not tell whether they were gardeners, or soldiers, or
		      courtiers, or three of her own children.
		    </p>
		    <p>
		      &lsquo;How should <i>I</i> know?&rsquo; said Alice, surprised at her own courage. &lsquo;It&rsquo;s no
		      business of <i>mine</i>.&rsquo;
		    </p>
		    <p>
		      The Queen turned crimson with fury, and, after glaring at her for a moment
		      like a wild beast, screamed &lsquo;Off with her head! Off&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Nonsense!&rsquo; said Alice, very loudly and decidedly, and the Queen was
		      silent.
		    </p>
		    <p>
		      The King laid his hand upon her arm, and timidly said &lsquo;Consider, my dear:
		      she is only a child!&rsquo;
		    </p>
		    <p>
		      The Queen turned angrily away from him, and said to the Knave &lsquo;Turn them
		      over!&rsquo;
		    </p>
		    <p>
		      The Knave did so, very carefully, with one foot.
		    </p>
		    <p>
		      &lsquo;Get up!&rsquo; said the Queen, in a shrill, loud voice, and the three gardeners
		      instantly jumped up, and began bowing to the King, the Queen, the royal
		      children, and everybody else.
		    </p>
		    <p>
		      &lsquo;Leave off that!&rsquo; screamed the Queen. &lsquo;You make me giddy.&rsquo; And then,
		      turning to the rose-tree, she went on, &lsquo;What <i>have</i> you been doing here?&rsquo;
		    </p>
		    <p>
		      &lsquo;May it please your Majesty,&rsquo; said Two, in a very humble tone, going down
		      on one knee as he spoke, &lsquo;we were trying&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>I</i> see!&rsquo; said the Queen, who had meanwhile been examining the roses. &lsquo;Off
		      with their heads!&rsquo; and the procession moved on, three of the soldiers
		      remaining behind to execute the unfortunate gardeners, who ran to Alice
		      for protection.
		    </p>
		    <p>
		      &lsquo;You shan&rsquo;t be beheaded!&rsquo; said Alice, and she put them into a large
		      flower-pot that stood near. The three soldiers wandered about for a minute
		      or two, looking for them, and then quietly marched off after the others.
		    </p>
		    <p>
		      &lsquo;Are their heads off?&rsquo; shouted the Queen.
		    </p>
		    <p>
		      &lsquo;Their heads are gone, if it please your Majesty!&rsquo; the soldiers shouted in
		      reply.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s right!&rsquo; shouted the Queen. &lsquo;Can you play croquet?&rsquo;
		    </p>
		    <p>
		      The soldiers were silent, and looked at Alice, as the question was
		      evidently meant for her.
		    </p>
		    <p>
		      &lsquo;Yes!&rsquo; shouted Alice.
		    </p>
		    <p>
		      &lsquo;Come on, then!&rsquo; roared the Queen, and Alice joined the procession,
		      wondering very much what would happen next.
		    </p>
		    <p>
		      &lsquo;It&rsquo;s&mdash;it&rsquo;s a very fine day!&rsquo; said a timid voice at her side. She was
		      walking by the White Rabbit, who was peeping anxiously into her face.
		    </p>
		    <p>
		      &lsquo;Very,&rsquo; said Alice: &lsquo;&mdash;where&rsquo;s the Duchess?&rsquo;
		    </p>
		    <p>
		      &lsquo;Hush! Hush!&rsquo; said the Rabbit in a low, hurried tone. He looked anxiously
		      over his shoulder as he spoke, and then raised himself upon tiptoe, put
		      his mouth close to her ear, and whispered &lsquo;She&rsquo;s under sentence of
		      execution.&rsquo;
		    </p>
		    <p>
		      &lsquo;What for?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Did you say &ldquo;What a pity!&rdquo;?&rsquo; the Rabbit asked.
		    </p>
		    <p>
		      &lsquo;No, I didn&rsquo;t,&rsquo; said Alice: &lsquo;I don&rsquo;t think it&rsquo;s at all a pity. I said
		      &ldquo;What for?&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;She boxed the Queen&rsquo;s ears&mdash;&rsquo; the Rabbit began. Alice gave a little
		      scream of laughter. &lsquo;Oh, hush!&rsquo; the Rabbit whispered in a frightened tone.
		      &lsquo;The Queen will hear you! You see, she came rather late, and the Queen
		      said&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Get to your places!&rsquo; shouted the Queen in a voice of thunder, and people
		      began running about in all directions, tumbling up against each other;
		      however, they got settled down in a minute or two, and the game began.
		      Alice thought she had never seen such a curious croquet-ground in her
		      life; it was all ridges and furrows; the balls were live hedgehogs, the
		      mallets live flamingoes, and the soldiers had to double themselves up and
		      to stand on their hands and feet, to make the arches.
		    </p>
		    <p>
		      The chief difficulty Alice found at first was in managing her flamingo:
		      she succeeded in getting its body tucked away, comfortably enough, under
		      her arm, with its legs hanging down, but generally, just as she had got
		      its neck nicely straightened out, and was going to give the hedgehog a
		      blow with its head, it <i>would</i> twist itself round and look up in her face,
		      with such a puzzled expression that she could not help bursting out
		      laughing: and when she had got its head down, and was going to begin
		      again, it was very provoking to find that the hedgehog had unrolled
		      itself, and was in the act of crawling away: besides all this, there was
		      generally a ridge or furrow in the way wherever she wanted to send the
		      hedgehog to, and, as the doubled-up soldiers were always getting up and
		      walking off to other parts of the ground, Alice soon came to the
		      conclusion that it was a very difficult game indeed.
		    </p>
		    <p>
		      The players all played at once without waiting for turns, quarrelling all
		      the while, and fighting for the hedgehogs; and in a very short time the
		      Queen was in a furious passion, and went stamping about, and shouting &lsquo;Off
		      with his head!&rsquo; or &lsquo;Off with her head!&rsquo; about once in a minute.
		    </p>
		    <p>
		      Alice began to feel very uneasy: to be sure, she had not as yet had any
		      dispute with the Queen, but she knew that it might happen any minute, &lsquo;and
		      then,&rsquo; thought she, &lsquo;what would become of me? They&rsquo;re dreadfully fond of
		      beheading people here; the great wonder is, that there&rsquo;s any one left
		      alive!&rsquo;
		    </p>
		    <p>
		      She was looking about for some way of escape, and wondering whether she
		      could get away without being seen, when she noticed a curious appearance
		      in the air: it puzzled her very much at first, but, after watching it a
		      minute or two, she made it out to be a grin, and she said to herself &lsquo;It&rsquo;s
		      the Cheshire Cat: now I shall have somebody to talk to.&rsquo;
		    </p>
		    <p>
		      &lsquo;How are you getting on?&rsquo; said the Cat, as soon as there was mouth enough
		      for it to speak with.
		    </p>
		    <p>
		      Alice waited till the eyes appeared, and then nodded. &lsquo;It&rsquo;s no use
		      speaking to it,&rsquo; she thought, &lsquo;till its ears have come, or at least one of
		      them.&rsquo; In another minute the whole head appeared, and then Alice put down
		      her flamingo, and began an account of the game, feeling very glad she had
		      someone to listen to her. The Cat seemed to think that there was enough of
		      it now in sight, and no more of it appeared.
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t think they play at all fairly,&rsquo; Alice began, in rather a
		      complaining tone, &lsquo;and they all quarrel so dreadfully one can&rsquo;t hear
		      oneself speak&mdash;and they don&rsquo;t seem to have any rules in particular;
		      at least, if there are, nobody attends to them&mdash;and you&rsquo;ve no idea
		      how confusing it is all the things being alive; for instance, there&rsquo;s the
		      arch I&rsquo;ve got to go through next walking about at the other end of the
		      ground&mdash;and I should have croqueted the Queen&rsquo;s hedgehog just now,
		      only it ran away when it saw mine coming!&rsquo;
		    </p>
		    <p>
		      &lsquo;How do you like the Queen?&rsquo; said the Cat in a low voice.
		    </p>
		    <p>
		      &lsquo;Not at all,&rsquo; said Alice: &lsquo;she&rsquo;s so extremely&mdash;&rsquo; Just then she
		      noticed that the Queen was close behind her, listening: so she went on, &lsquo;&mdash;likely
		      to win, that it&rsquo;s hardly worth while finishing the game.&rsquo;
		    </p>
		    <p>
		      The Queen smiled and passed on.
		    </p>
		    <p>
		      &lsquo;Who <i>are</i> you talking to?&rsquo; said the King, going up to Alice, and looking at
		      the Cat&rsquo;s head with great curiosity.
		    </p>
		    <p>
		      &lsquo;It&rsquo;s a friend of mine&mdash;a Cheshire Cat,&rsquo; said Alice: &lsquo;allow me to
		      introduce it.&rsquo;
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t like the look of it at all,&rsquo; said the King: &lsquo;however, it may kiss
		      my hand if it likes.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;d rather not,&rsquo; the Cat remarked.
		    </p>
		    <p>
		      &lsquo;Don&rsquo;t be impertinent,&rsquo; said the King, &lsquo;and don&rsquo;t look at me like that!&rsquo;
		      He got behind Alice as he spoke.
		    </p>
		    <p>
		      &lsquo;A cat may look at a king,&rsquo; said Alice. &lsquo;I&rsquo;ve read that in some book, but
		      I don&rsquo;t remember where.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, it must be removed,&rsquo; said the King very decidedly, and he called
		      the Queen, who was passing at the moment, &lsquo;My dear! I wish you would have
		      this cat removed!&rsquo;
		    </p>
		    <p>
		      The Queen had only one way of settling all difficulties, great or small.
		      &lsquo;Off with his head!&rsquo; she said, without even looking round.
		    </p>
		    <p>
		      &lsquo;I&rsquo;ll fetch the executioner myself,&rsquo; said the King eagerly, and he hurried
		      off.
		    </p>
		    <p>
		      Alice thought she might as well go back, and see how the game was going
		      on, as she heard the Queen&rsquo;s voice in the distance, screaming with
		      passion. She had already heard her sentence three of the players to be
		      executed for having missed their turns, and she did not like the look of
		      things at all, as the game was in such confusion that she never knew
		      whether it was her turn or not. So she went in search of her hedgehog.
		    </p>
		    <p>
		      The hedgehog was engaged in a fight with another hedgehog, which seemed to
		      Alice an excellent opportunity for croqueting one of them with the other:
		      the only difficulty was, that her flamingo was gone across to the other
		      side of the garden, where Alice could see it trying in a helpless sort of
		      way to fly up into a tree.
		    </p>
		    <p>
		      By the time she had caught the flamingo and brought it back, the fight was
		      over, and both the hedgehogs were out of sight: &lsquo;but it doesn&rsquo;t matter
		      much,&rsquo; thought Alice, &lsquo;as all the arches are gone from this side of the
		      ground.&rsquo; So she tucked it away under her arm, that it might not escape
		      again, and went back for a little more conversation with her friend.
		    </p>
		    <p>
		      When she got back to the Cheshire Cat, she was surprised to find quite a
		      large crowd collected round it: there was a dispute going on between the
		      executioner, the King, and the Queen, who were all talking at once, while
		      all the rest were quite silent, and looked very uncomfortable.
		    </p>
		    <p>
		      The moment Alice appeared, she was appealed to by all three to settle the
		      question, and they repeated their arguments to her, though, as they all
		      spoke at once, she found it very hard indeed to make out exactly what they
		      said.
		    </p>
		    <p>
		      The executioner&rsquo;s argument was, that you couldn&rsquo;t cut off a head unless
		      there was a body to cut it off from: that he had never had to do such a
		      thing before, and he wasn&rsquo;t going to begin at <i>his</i> time of life.
		    </p>
		    <p>
		      The King&rsquo;s argument was, that anything that had a head could be beheaded,
		      and that you weren&rsquo;t to talk nonsense.
		    </p>
		    <p>
		      The Queen&rsquo;s argument was, that if something wasn&rsquo;t done about it in less
		      than no time she&rsquo;d have everybody executed, all round. (It was this last
		      remark that had made the whole party look so grave and anxious.)
		    </p>
		    <p>
		      Alice could think of nothing else to say but &lsquo;It belongs to the Duchess:
		      you&rsquo;d better ask <i>her</i> about it.&rsquo;
		    </p>
		    <p>
		      &lsquo;She&rsquo;s in prison,&rsquo; the Queen said to the executioner: &lsquo;fetch her here.&rsquo;
		      And the executioner went off like an arrow.
		    </p>
		    <p>
		      The Cat&rsquo;s head began fading away the moment he was gone, and,
		      by the time he had come back with the Duchess, it had entirely
		      disappeared; so the King and the executioner ran wildly up and down
		      looking for it, while the rest of the party went back to the game.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "The Mock Turtle’s Story",
			'number' => "Nine",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      &lsquo;You can&rsquo;t think how glad I am to see you again, you dear old thing!&rsquo; said
		      the Duchess, as she tucked her arm affectionately into Alice&rsquo;s, and they
		      walked off together.
		    </p>
		    <p>
		      Alice was very glad to find her in such a pleasant temper, and thought to
		      herself that perhaps it was only the pepper that had made her so savage
		      when they met in the kitchen.
		    </p>
		    <p>
		      &lsquo;When <i>I&rsquo;m</i> a Duchess,&rsquo; she said to herself, (not in a very hopeful tone
		      though), &lsquo;I won&rsquo;t have any pepper in my kitchen <i>at all</i>. Soup does very
		      well without&mdash;Maybe it&rsquo;s always pepper that makes people
		      hot-tempered,&rsquo; she went on, very much pleased at having found out a new
		      kind of rule, &lsquo;and vinegar that makes them sour&mdash;and camomile that
		      makes them bitter&mdash;and&mdash;and barley-sugar and such things that
		      make children sweet-tempered. I only wish people knew <i>that</i>: then they
		      wouldn&rsquo;t be so stingy about it, you know&mdash;&rsquo;
		    </p>
		    <p>
		      She had quite forgotten the Duchess by this time, and was a little
		      startled when she heard her voice close to her ear. &lsquo;You&rsquo;re thinking about
		      something, my dear, and that makes you forget to talk. I can&rsquo;t tell you
		      just now what the moral of that is, but I shall remember it in a bit.&rsquo;
		    </p>
		    <p>
		      &lsquo;Perhaps it hasn&rsquo;t one,&rsquo; Alice ventured to remark.
		    </p>
		    <p>
		      &lsquo;Tut, tut, child!&rsquo; said the Duchess. &lsquo;Everything&rsquo;s got a moral, if only
		      you can find it.&rsquo; And she squeezed herself up closer to Alice&rsquo;s side as
		      she spoke.
		    </p>
		    <p>
		      Alice did not much like keeping so close to her: first, because the
		      Duchess was <i>very</i> ugly; and secondly, because she was exactly the right
		      height to rest her chin upon Alice&rsquo;s shoulder, and it was an uncomfortably
		      sharp chin. However, she did not like to be rude, so she bore it as well
		      as she could.
		    </p>
		    <p>
		      &lsquo;The game&rsquo;s going on rather better now,&rsquo; she said, by way of keeping up
		      the conversation a little.
		    </p>
		    <p>
		      &lsquo;&rsquo;Tis so,&rsquo; said the Duchess: &lsquo;and the moral of that is&mdash;&ldquo;Oh, &lsquo;tis
		      love, &lsquo;tis love, that makes the world go round!&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Somebody said,&rsquo; Alice whispered, &lsquo;that it&rsquo;s done by everybody minding
		      their own business!&rsquo;
		    </p>
		    <p>
		      &lsquo;Ah, well! It means much the same thing,&rsquo; said the Duchess, digging her
		      sharp little chin into Alice&rsquo;s shoulder as she added, &lsquo;and the moral of
		      <i>that</i> is&mdash;&ldquo;Take care of the sense, and the sounds will take care of
		      themselves.&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;How fond she is of finding morals in things!&rsquo; Alice thought to herself.
		    </p>
		    <p>
		      &lsquo;I dare say you&rsquo;re wondering why I don&rsquo;t put my arm round your waist,&rsquo; the
		      Duchess said after a pause: &lsquo;the reason is, that I&rsquo;m doubtful about the
		      temper of your flamingo. Shall I try the experiment?&rsquo;
		    </p>
		    <p>
		      &lsquo;He might bite,&rsquo; Alice cautiously replied, not feeling at all anxious to
		      have the experiment tried.
		    </p>
		    <p>
		      &lsquo;Very true,&rsquo; said the Duchess: &lsquo;flamingoes and mustard both bite. And the
		      moral of that is&mdash;&ldquo;Birds of a feather flock together.&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Only mustard isn&rsquo;t a bird,&rsquo; Alice remarked.
		    </p>
		    <p>
		      &lsquo;Right, as usual,&rsquo; said the Duchess: &lsquo;what a clear way you have of putting
		      things!&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s a mineral, I <i>think</i>,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Of course it is,&rsquo; said the Duchess, who seemed ready to agree to
		      everything that Alice said; &lsquo;there&rsquo;s a large mustard-mine near here. And
		      the moral of that is&mdash;&ldquo;The more there is of mine, the less there is
		      of yours.&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, I know!&rsquo; exclaimed Alice, who had not attended to this last remark,
		      &lsquo;it&rsquo;s a vegetable. It doesn&rsquo;t look like one, but it is.&rsquo;
		    </p>
		    <p>
		      &lsquo;I quite agree with you,&rsquo; said the Duchess; &lsquo;and the moral of that is&mdash;&ldquo;Be
		      what you would seem to be&rdquo;&mdash;or if you&rsquo;d like it put more simply&mdash;&ldquo;Never
		      imagine yourself not to be otherwise than what it might appear to others
		      that what you were or might have been was not otherwise than what you had
		      been would have appeared to them to be otherwise.&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;I think I should understand that better,&rsquo; Alice said very politely, &lsquo;if I
		      had it written down: but I can&rsquo;t quite follow it as you say it.&rsquo;
		    </p>
		    <p>
		      &lsquo;That&rsquo;s nothing to what I could say if I chose,&rsquo; the Duchess replied, in a
		      pleased tone.
		    </p>
		    <p>
		      &lsquo;Pray don&rsquo;t trouble yourself to say it any longer than that,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Oh, don&rsquo;t talk about trouble!&rsquo; said the Duchess. &lsquo;I make you a present of
		      everything I&rsquo;ve said as yet.&rsquo;
		    </p>
		    <p>
		      &lsquo;A cheap sort of present!&rsquo; thought Alice. &lsquo;I&rsquo;m glad they don&rsquo;t give
		      birthday presents like that!&rsquo; But she did not venture to say it out loud.
		    </p>
		    <p>
		      &lsquo;Thinking again?&rsquo; the Duchess asked, with another dig of her sharp little
		      chin.
		    </p>
		    <p>
		      &lsquo;I&rsquo;ve a right to think,&rsquo; said Alice sharply, for she was beginning to feel
		      a little worried.
		    </p>
		    <p>
		      &lsquo;Just about as much right,&rsquo; said the Duchess, &lsquo;as pigs have to fly; and
		      the m&mdash;&rsquo;
		    </p>
		    <p>
		      But here, to Alice&rsquo;s great surprise, the Duchess&rsquo;s voice died away, even
		      in the middle of her favourite word &lsquo;moral,&rsquo; and the arm that was linked
		      into hers began to tremble. Alice looked up, and there stood the Queen in
		      front of them, with her arms folded, frowning like a thunderstorm.
		    </p>
		    <p>
		      &lsquo;A fine day, your Majesty!&rsquo; the Duchess began in a low, weak voice.
		    </p>
		    <p>
		      &lsquo;Now, I give you fair warning,&rsquo; shouted the Queen, stamping on the ground
		      as she spoke; &lsquo;either you or your head must be off, and that in about half
		      no time! Take your choice!&rsquo;
		    </p>
		    <p>
		      The Duchess took her choice, and was gone in a moment.
		    </p>
		    <p>
		      &lsquo;Let&rsquo;s go on with the game,&rsquo; the Queen said to Alice; and Alice was too
		      much frightened to say a word, but slowly followed her back to the
		      croquet-ground.
		    </p>
		    <p>
		      The other guests had taken advantage of the Queen&rsquo;s absence, and were
		      resting in the shade: however, the moment they saw her, they hurried back
		      to the game, the Queen merely remarking that a moment&rsquo;s delay would cost
		      them their lives.
		    </p>
		    <p>
		      All the time they were playing the Queen never left off quarrelling with
		      the other players, and shouting &lsquo;Off with his head!&rsquo; or &lsquo;Off with her
		      head!&rsquo; Those whom she sentenced were taken into custody by the soldiers,
		      who of course had to leave off being arches to do this, so that by the end
		      of half an hour or so there were no arches left, and all the players,
		      except the King, the Queen, and Alice, were in custody and under sentence
		      of execution.
		    </p>
		    <p>
		      Then the Queen left off, quite out of breath, and said to Alice, &lsquo;Have you
		      seen the Mock Turtle yet?&rsquo;
		    </p>
		    <p>
		      &lsquo;No,&rsquo; said Alice. &lsquo;I don&rsquo;t even know what a Mock Turtle is.&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s the thing Mock Turtle Soup is made from,&rsquo; said the Queen.
		    </p>
		    <p>
		      &lsquo;I never saw one, or heard of one,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Come on, then,&rsquo; said the Queen, &lsquo;and he shall tell you his history,&rsquo;
		    </p>
		    <p>
		      As they walked off together, Alice heard the King say in a low voice, to
		      the company generally, &lsquo;You are all pardoned.&rsquo; &lsquo;Come, <i>that&rsquo;s</i> a good
		      thing!&rsquo; she said to herself, for she had felt quite unhappy at the number
		      of executions the Queen had ordered.
		    </p>
		    <p>
		      They very soon came upon a Gryphon, lying fast asleep in the sun. (If you
		      don&rsquo;t know what a Gryphon is, look at the picture.) &lsquo;Up, lazy thing!&rsquo; said
		      the Queen, &lsquo;and take this young lady to see the Mock Turtle, and to hear
		      his history. I must go back and see after some executions I have ordered&rsquo;;
		      and she walked off, leaving Alice alone with the Gryphon. Alice did not
		      quite like the look of the creature, but on the whole she thought it would
		      be quite as safe to stay with it as to go after that savage Queen: so she
		      waited.
		    </p>
		    <p>
		      The Gryphon sat up and rubbed its eyes: then it watched the Queen till she
		      was out of sight: then it chuckled. &lsquo;What fun!&rsquo; said the Gryphon, half to
		      itself, half to Alice.
		    </p>
		    <p>
		      &lsquo;What <i>is</i> the fun?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Why, <i>she</i>,&rsquo; said the Gryphon. &lsquo;It&rsquo;s all her fancy, that: they never
		      executes nobody, you know. Come on!&rsquo;
		    </p>
		    <p>
		      &lsquo;Everybody says &ldquo;come on!&rdquo; here,&rsquo; thought Alice, as she went slowly after
		      it: &lsquo;I never was so ordered about in all my life, never!&rsquo;
		    </p>
		    <p>
		      They had not gone far before they saw the Mock Turtle in the distance,
		      sitting sad and lonely on a little ledge of rock, and, as they came
		      nearer, Alice could hear him sighing as if his heart would break. She
		      pitied him deeply. &lsquo;What is his sorrow?&rsquo; she asked the Gryphon, and the
		      Gryphon answered, very nearly in the same words as before, &lsquo;It&rsquo;s all his
		      fancy, that: he hasn&rsquo;t got no sorrow, you know. Come on!&rsquo;
		    </p>
		    <p>
		      So they went up to the Mock Turtle, who looked at them with large eyes
		      full of tears, but said nothing.
		    </p>
		    <p>
		      &lsquo;This here young lady,&rsquo; said the Gryphon, &lsquo;she wants for to know your
		      history, she do.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;ll tell it her,&rsquo; said the Mock Turtle in a deep, hollow tone: &lsquo;sit
		      down, both of you, and don&rsquo;t speak a word till I&rsquo;ve finished.&rsquo;
		    </p>
		    <p>
		      So they sat down, and nobody spoke for some minutes. Alice thought to
		      herself, &lsquo;I don&rsquo;t see how he can <i>ever</i> finish, if he doesn&rsquo;t begin.&rsquo; But
		      she waited patiently.
		    </p>
		    <p>
		      &lsquo;Once,&rsquo; said the Mock Turtle at last, with a deep sigh, &lsquo;I was a real
		      Turtle.&rsquo;
		    </p>
		    <p>
		      These words were followed by a very long silence, broken only by an
		      occasional exclamation of &lsquo;Hjckrrh!&rsquo; from the Gryphon, and the constant
		      heavy sobbing of the Mock Turtle. Alice was very nearly getting up and
		      saying, &lsquo;Thank you, sir, for your interesting story,&rsquo; but she could not
		      help thinking there <i>must</i> be more to come, so she sat still and said
		      nothing.
		    </p>
		    <p>
		      &lsquo;When we were little,&rsquo; the Mock Turtle went on at last, more calmly,
		      though still sobbing a little now and then, &lsquo;we went to school in the sea.
		      The master was an old Turtle&mdash;we used to call him Tortoise&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Why did you call him Tortoise, if he wasn&rsquo;t one?&rsquo; Alice asked.
		    </p>
		    <p>
		      &lsquo;We called him Tortoise because he taught us,&rsquo; said the Mock Turtle
		      angrily: &lsquo;really you are very dull!&rsquo;
		    </p>
		    <p>
		      &lsquo;You ought to be ashamed of yourself for asking such a simple question,&rsquo;
		      added the Gryphon; and then they both sat silent and looked at poor Alice,
		      who felt ready to sink into the earth. At last the Gryphon said to the
		      Mock Turtle, &lsquo;Drive on, old fellow! Don&rsquo;t be all day about it!&rsquo; and he
		      went on in these words:
		    </p>
		    <p>
		      &lsquo;Yes, we went to school in the sea, though you mayn&rsquo;t believe it&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;I never said I didn&rsquo;t!&rsquo; interrupted Alice.
		    </p>
		    <p>
		      &lsquo;You did,&rsquo; said the Mock Turtle.
		    </p>
		    <p>
		      &lsquo;Hold your tongue!&rsquo; added the Gryphon, before Alice could speak again. The
		      Mock Turtle went on.
		    </p>
		    <p>
		      &lsquo;We had the best of educations&mdash;in fact, we went to school every day&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>I&rsquo;ve</i> been to a day-school, too,&rsquo; said Alice; &lsquo;you needn&rsquo;t be so proud as
		      all that.&rsquo;
		    </p>
		    <p>
		      &lsquo;With extras?&rsquo; asked the Mock Turtle a little anxiously.
		    </p>
		    <p>
		      &lsquo;Yes,&rsquo; said Alice, &lsquo;we learned French and music.&rsquo;
		    </p>
		    <p>
		      &lsquo;And washing?&rsquo; said the Mock Turtle.
		    </p>
		    <p>
		      &lsquo;Certainly not!&rsquo; said Alice indignantly.
		    </p>
		    <p>
		      &lsquo;Ah! then yours wasn&rsquo;t a really good school,&rsquo; said the Mock Turtle in a
		      tone of great relief. &lsquo;Now at <i>ours</i> they had at the end of the bill,
		      &ldquo;French, music, <i>and washing</i>&mdash;extra.&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;You couldn&rsquo;t have wanted it much,&rsquo; said Alice; &lsquo;living at the bottom of
		      the sea.&rsquo;
		    </p>
		    <p>
		      &lsquo;I couldn&rsquo;t afford to learn it.&rsquo; said the Mock Turtle with a sigh. &lsquo;I only
		      took the regular course.&rsquo;
		    </p>
		    <p>
		      &lsquo;What was that?&rsquo; inquired Alice.
		    </p>
		    <p>
		      &lsquo;Reeling and Writhing, of course, to begin with,&rsquo; the Mock Turtle replied;
		      &lsquo;and then the different branches of Arithmetic&mdash;Ambition,
		      Distraction, Uglification, and Derision.&rsquo;
		    </p>
		    <p>
		      &lsquo;I never heard of &ldquo;Uglification,&rdquo;&rsquo; Alice ventured to say. &lsquo;What is it?&rsquo;
		    </p>
		    <p>
		      The Gryphon lifted up both its paws in surprise. &lsquo;What! Never heard of
		      uglifying!&rsquo; it exclaimed. &lsquo;You know what to beautify is, I suppose?&rsquo;
		    </p>
		    <p>
		      &lsquo;Yes,&rsquo; said Alice doubtfully: &lsquo;it means&mdash;to&mdash;make&mdash;anything&mdash;prettier.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, then,&rsquo; the Gryphon went on, &lsquo;if you don&rsquo;t know what to uglify is,
		      you <i>are</i> a simpleton.&rsquo;
		    </p>
		    <p>
		      Alice did not feel encouraged to ask any more questions about it, so she
		      turned to the Mock Turtle, and said &lsquo;What else had you to learn?&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, there was Mystery,&rsquo; the Mock Turtle replied, counting off the
		      subjects on his flappers, &lsquo;&mdash;Mystery, ancient and modern, with
		      Seaography: then Drawling&mdash;the Drawling-master was an old conger-eel,
		      that used to come once a week: <i>he</i> taught us Drawling, Stretching, and
		      Fainting in Coils.&rsquo;
		    </p>
		    <p>
		      &lsquo;What was <i>that</i> like?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Well, I can&rsquo;t show it you myself,&rsquo; the Mock Turtle said: &lsquo;I&rsquo;m too stiff.
		      And the Gryphon never learnt it.&rsquo;
		    </p>
		    <p>
		      &lsquo;Hadn&rsquo;t time,&rsquo; said the Gryphon: &lsquo;I went to the Classics master, though.
		      He was an old crab, <i>he</i> was.&rsquo;
		    </p>
		    <p>
		      &lsquo;I never went to him,&rsquo; the Mock Turtle said with a sigh: &lsquo;he taught
		      Laughing and Grief, they used to say.&rsquo;
		    </p>
		    <p>
		      &lsquo;So he did, so he did,&rsquo; said the Gryphon, sighing in his turn; and both
		      creatures hid their faces in their paws.
		    </p>
		    <p>
		      &lsquo;And how many hours a day did you do lessons?&rsquo; said Alice, in a hurry to
		      change the subject.
		    </p>
		    <p>
		      &lsquo;Ten hours the first day,&rsquo; said the Mock Turtle: &lsquo;nine the next, and so
		      on.&rsquo;
		    </p>
		    <p>
		      &lsquo;What a curious plan!&rsquo; exclaimed Alice.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s the reason they&rsquo;re called lessons,&rsquo; the Gryphon remarked: &lsquo;because
		      they lessen from day to day.&rsquo;
		    </p>
		    <p>
		      This was quite a new idea to Alice, and she thought it over a little
		      before she made her next remark. &lsquo;Then the eleventh day must have been a
		      holiday?&rsquo;
		    </p>
		    <p>
		      &lsquo;Of course it was,&rsquo; said the Mock Turtle.
		    </p>
		    <p>
		      &lsquo;And how did you manage on the twelfth?&rsquo; Alice went on eagerly.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s enough about lessons,&rsquo; the Gryphon interrupted in a very decided
		      tone: &lsquo;tell her something about the games now.&rsquo;
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "The Lobster Quadrille",
			'number' => "Ten",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      The Mock Turtle sighed deeply, and drew the back of one flapper across his
		      eyes. He looked at Alice, and tried to speak, but for a minute or two sobs
		      choked his voice. &lsquo;Same as if he had a bone in his throat,&rsquo; said the
		      Gryphon: and it set to work shaking him and punching him in the back. At
		      last the Mock Turtle recovered his voice, and, with tears running down his
		      cheeks, he went on again:&mdash;
		    </p>
		    <p>
		      &lsquo;You may not have lived much under the sea&mdash;&rsquo; (&lsquo;I haven&rsquo;t,&rsquo; said
		      Alice)&mdash;&lsquo;and perhaps you were never even introduced to a lobster&mdash;&rsquo;
		      (Alice began to say &lsquo;I once tasted&mdash;&rsquo; but checked herself hastily,
		      and said &lsquo;No, never&rsquo;) &lsquo;&mdash;so you can have no idea what a delightful
		      thing a Lobster Quadrille is!&rsquo;
		    </p>
		    <p>
		      &lsquo;No, indeed,&rsquo; said Alice. &lsquo;What sort of a dance is it?&rsquo;
		    </p>
		    <p>
		      &lsquo;Why,&rsquo; said the Gryphon, &lsquo;you first form into a line along the sea-shore&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Two lines!&rsquo; cried the Mock Turtle. &lsquo;Seals, turtles, salmon, and so on;
		      then, when you&rsquo;ve cleared all the jelly-fish out of the way&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>That</i> generally takes some time,&rsquo; interrupted the Gryphon.
		    </p>
		    <p>
		      &lsquo;&mdash;you advance twice&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Each with a lobster as a partner!&rsquo; cried the Gryphon.
		    </p>
		    <p>
		      &lsquo;Of course,&rsquo; the Mock Turtle said: &lsquo;advance twice, set to partners&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;&mdash;change lobsters, and retire in same order,&rsquo; continued the Gryphon.
		    </p>
		    <p>
		      &lsquo;Then, you know,&rsquo; the Mock Turtle went on, &lsquo;you throw the&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;The lobsters!&rsquo; shouted the Gryphon, with a bound into the air.
		    </p>
		    <p>
		      &lsquo;&mdash;as far out to sea as you can&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Swim after them!&rsquo; screamed the Gryphon.
		    </p>
		    <p>
		      &lsquo;Turn a somersault in the sea!&rsquo; cried the Mock Turtle, capering wildly
		      about.
		    </p>
		    <p>
		      &lsquo;Change lobsters again!&rsquo; yelled the Gryphon at the top of its voice.
		    </p>
		    <p>
		      &lsquo;Back to land again, and that&rsquo;s all the first figure,&rsquo; said the Mock
		      Turtle, suddenly dropping his voice; and the two creatures, who had been
		      jumping about like mad things all this time, sat down again very sadly and
		      quietly, and looked at Alice.
		    </p>
		    <p>
		      &lsquo;It must be a very pretty dance,&rsquo; said Alice timidly.
		    </p>
		    <p>
		      &lsquo;Would you like to see a little of it?&rsquo; said the Mock Turtle.
		    </p>
		    <p>
		      &lsquo;Very much indeed,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Come, let&rsquo;s try the first figure!&rsquo; said the Mock Turtle to the Gryphon.
		      &lsquo;We can do without lobsters, you know. Which shall sing?&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, <i>you</i> sing,&rsquo; said the Gryphon. &lsquo;I&rsquo;ve forgotten the words.&rsquo;
		    </p>
		    <p>
		      So they began solemnly dancing round and round Alice, every now and then
		      treading on her toes when they passed too close, and waving their forepaws
		      to mark the time, while the Mock Turtle sang this, very slowly and sadly:&mdash;
		    </p>
		    <p class='aiw-snail stanza'>
		 &lsquo;&ldquo;Will you walk a little faster?&rdquo; said a whiting to a snail.
		    <br>
		 &ldquo;There&rsquo;s a porpoise close behind us, and he&rsquo;s treading on my tail.
		    </p>
		    <p class='aiw-snail stanza'>
		 See how eagerly the lobsters and the turtles all advance!
		    <br>
		 They are waiting on the shingle&mdash;will you come and join the dance?
		    </p>
		    <p class='aiw-snail stanza'>
		 Will you, won&rsquo;t you, will you, won&rsquo;t you, will you join the dance?
		    <br>
		 Will you, won&rsquo;t you, will you, won&rsquo;t you, won&rsquo;t you join the dance?
		    </p>
		    <p class='aiw-snail stanza'>
		 &ldquo;You can really have no notion how delightful it will be
		    <br>
		 When they take us up and throw us, with the lobsters, out to sea!&rdquo;
		    <br>
		  But the snail replied &ldquo;Too far, too far!&rdquo; and gave a look askance&mdash;
		    <br>
		 Said he thanked the whiting kindly, but he would not join the dance.
		    </p>
		    <p class='aiw-snail stanza'>
		 Would not, could not, would not, could not, would not join the dance.
		    <br>
		 Would not, could not, would not, could not, could not join the dance.
		    </p>
		    <p class='aiw-snail stanza'>
		 &lsquo;&ldquo;What matters it how far we go?&rdquo; his scaly friend replied.
		    <br>
		 &ldquo;There is another shore, you know, upon the other side.
		    <br>
		 The further off from England the nearer is to France&mdash;
		    <br>
		 Then turn not pale, beloved snail, but come and join the dance.
		    </p>
		    <p class='aiw-snail stanza'>
		 Will you, won&rsquo;t you, will you, won&rsquo;t you, will you join the dance?
		    <br>
		 Will you, won&rsquo;t you, will you, won&rsquo;t you, won&rsquo;t you join the dance?&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Thank you, it&rsquo;s a very interesting dance to watch,&rsquo; said Alice, feeling
		      very glad that it was over at last: &lsquo;and I do so like that curious song
		      about the whiting!&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, as to the whiting,&rsquo; said the Mock Turtle, &lsquo;they&mdash;you&rsquo;ve seen
		      them, of course?&rsquo;
		    </p>
		    <p>
		      &lsquo;Yes,&rsquo; said Alice, &lsquo;I&rsquo;ve often seen them at dinn&mdash;&rsquo; she checked
		      herself hastily.
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t know where Dinn may be,&rsquo; said the Mock Turtle, &lsquo;but if you&rsquo;ve
		      seen them so often, of course you know what they&rsquo;re like.&rsquo;
		    </p>
		    <p>
		      &lsquo;I believe so,&rsquo; Alice replied thoughtfully. &lsquo;They have their tails in
		      their mouths&mdash;and they&rsquo;re all over crumbs.&rsquo;
		    </p>
		    <p>
		      &lsquo;You&rsquo;re wrong about the crumbs,&rsquo; said the Mock Turtle: &lsquo;crumbs would all
		      wash off in the sea. But they <i>have</i> their tails in their mouths; and the
		      reason is&mdash;&rsquo; here the Mock Turtle yawned and shut his eyes.&mdash;&lsquo;Tell
		      her about the reason and all that,&rsquo; he said to the Gryphon.
		    </p>
		    <p>
		      &lsquo;The reason is,&rsquo; said the Gryphon, &lsquo;that they <i>would</i> go with the lobsters
		      to the dance. So they got thrown out to sea. So they had to fall a long
		      way. So they got their tails fast in their mouths. So they couldn&rsquo;t get
		      them out again. That&rsquo;s all.&rsquo;
		    </p>
		    <p>
		      &lsquo;Thank you,&rsquo; said Alice, &lsquo;it&rsquo;s very interesting. I never knew so much
		      about a whiting before.&rsquo;
		    </p>
		    <p>
		      &lsquo;I can tell you more than that, if you like,&rsquo; said the Gryphon. &lsquo;Do you
		      know why it&rsquo;s called a whiting?&rsquo;
		    </p>
		    <p>
		      &lsquo;I never thought about it,&rsquo; said Alice. &lsquo;Why?&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>It does the boots and shoes</i>,&rsquo; the Gryphon replied very solemnly.
		    </p>
		    <p>
		      Alice was thoroughly puzzled. &lsquo;Does the boots and shoes!&rsquo; she repeated in
		      a wondering tone.
		    </p>
		    <p>
		      &lsquo;Why, what are <i>your</i> shoes done with?&rsquo; said the Gryphon. &lsquo;I mean, what
		      makes them so shiny?&rsquo;
		    </p>
		    <p>
		      Alice looked down at them, and considered a little before she gave her
		      answer. &lsquo;They&rsquo;re done with blacking, I believe.&rsquo;
		    </p>
		    <p>
		      &lsquo;Boots and shoes under the sea,&rsquo; the Gryphon went on in a deep voice, &lsquo;are
		      done with a whiting. Now you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;And what are they made of?&rsquo; Alice asked in a tone of great curiosity.
		    </p>
		    <p>
		      &lsquo;Soles and eels, of course,&rsquo; the Gryphon replied rather impatiently: &lsquo;any
		      shrimp could have told you that.&rsquo;
		    </p>
		    <p>
		      &lsquo;If I&rsquo;d been the whiting,&rsquo; said Alice, whose thoughts were still running
		      on the song, &lsquo;I&rsquo;d have said to the porpoise, &ldquo;Keep back, please: we don&rsquo;t
		      want <i>you</i> with us!&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;They were obliged to have him with them,&rsquo; the Mock Turtle said: &lsquo;no wise
		      fish would go anywhere without a porpoise.&rsquo;
		    </p>
		    <p>
		      &lsquo;Wouldn&rsquo;t it really?&rsquo; said Alice in a tone of great surprise.
		    </p>
		    <p>
		      &lsquo;Of course not,&rsquo; said the Mock Turtle: &lsquo;why, if a fish came to <i>me</i>, and
		      told me he was going a journey, I should say &ldquo;With what porpoise?&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Don&rsquo;t you mean &ldquo;purpose&rdquo;?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;I mean what I say,&rsquo; the Mock Turtle replied in an offended tone. And the
		      Gryphon added &lsquo;Come, let&rsquo;s hear some of <i>your</i> adventures.&rsquo;
		    </p>
		    <p>
		      &lsquo;I could tell you my adventures&mdash;beginning from this morning,&rsquo; said
		      Alice a little timidly: &lsquo;but it&rsquo;s no use going back to yesterday, because
		      I was a different person then.&rsquo;
		    </p>
		    <p>
		      &lsquo;Explain all that,&rsquo; said the Mock Turtle.
		    </p>
		    <p>
		      &lsquo;No, no! The adventures first,&rsquo; said the Gryphon in an impatient tone:
		      &lsquo;explanations take such a dreadful time.&rsquo;
		    </p>
		    <p>
		      So Alice began telling them her adventures from the time when she first
		      saw the White Rabbit. She was a little nervous about it just at first, the
		      two creatures got so close to her, one on each side, and opened their eyes
		      and mouths so <i>very</i> wide, but she gained courage as she went on. Her
		      listeners were perfectly quiet till she got to the part about her
		      repeating &lsquo;<i>You are old, Father William</i>,&rsquo; to the Caterpillar, and the words
		      all coming different, and then the Mock Turtle drew a long breath, and
		      said &lsquo;That&rsquo;s very curious.&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s all about as curious as it can be,&rsquo; said the Gryphon.
		    </p>
		    <p>
		      &lsquo;It all came different!&rsquo; the Mock Turtle repeated thoughtfully. &lsquo;I should
		      like to hear her try and repeat something now. Tell her to begin.&rsquo; He
		      looked at the Gryphon as if he thought it had some kind of authority over
		      Alice.
		    </p>
		    <p>
		      &lsquo;Stand up and repeat &ldquo;&lsquo;<i>Tis the voice of the sluggard</i>,&rdquo;&rsquo; said the Gryphon.
		    </p>
		    <p>
		      &lsquo;How the creatures order one about, and make one repeat lessons!&rsquo; thought
		      Alice; &lsquo;I might as well be at school at once.&rsquo; However, she got up, and
		      began to repeat it, but her head was so full of the Lobster Quadrille,
		      that she hardly knew what she was saying, and the words came very queer
		      indeed:&mdash;
		    </p>
		    <p class='aiw-lobster stanza'>
		  &lsquo;&rsquo;Tis the voice of the Lobster; I heard him declare,
		    <br>
		  &ldquo;You have baked me too brown, I must sugar my hair.&rdquo;
		    <br>
		   As a duck with its eyelids, so he with his nose
		    <br>
		  Trims his belt and his buttons, and turns out his toes.&rsquo;
		    </p>
		    <p class='aiw-lobster stanza'>
		       [later editions continued as follows
		    <br>
		  When the sands are all dry, he is gay as a lark,
		    <br>
		  And will talk in contemptuous tones of the Shark,
		    <br>
		  But, when the tide rises and sharks are around,
		    <br>
		  His voice has a timid and tremulous sound.]
		    </p>
		    <p>
		      &lsquo;That&rsquo;s different from what <i>I</i> used to say when I was a child,&rsquo; said the
		      Gryphon.
		    </p>
		    <p>
		      &lsquo;Well, I never heard it before,&rsquo; said the Mock Turtle; &lsquo;but it sounds
		      uncommon nonsense.&rsquo;
		    </p>
		    <p>
		      Alice said nothing; she had sat down with her face in her hands, wondering
		      if anything would <i>ever</i> happen in a natural way again.
		    </p>
		    <p>
		      &lsquo;I should like to have it explained,&rsquo; said the Mock Turtle.
		    </p>
		    <p>
		      &lsquo;She can&rsquo;t explain it,&rsquo; said the Gryphon hastily. &lsquo;Go on with the next
		      verse.&rsquo;
		    </p>
		    <p>
		      &lsquo;But about his toes?&rsquo; the Mock Turtle persisted. &lsquo;How <i>could</i> he turn them
		      out with his nose, you know?&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s the first position in dancing.&rsquo; Alice said; but was dreadfully
		      puzzled by the whole thing, and longed to change the subject.
		    </p>
		    <p>
		      &lsquo;Go on with the next verse,&rsquo; the Gryphon repeated impatiently: &lsquo;it begins
		      &ldquo;<i>I passed by his garden</i>.&rdquo;&rsquo;
		    </p>
		    <p>
		      Alice did not dare to disobey, though she felt sure it would all come
		      wrong, and she went on in a trembling voice:&mdash;
		    </p>
		    <p class='aiw-panther stanza'>
		  &lsquo;I passed by his garden, and marked, with one eye,
		    <br>
		  How the Owl and the Panther were sharing a pie&mdash;&rsquo;
		    </p>
		    <p class='aiw-panther stanza'>
		    [later editions continued as follows
		    <br>
		  The Panther took pie-crust, and gravy, and meat,
		    <br>
		  While the Owl had the dish as its share of the treat.
		    <br>
		  When the pie was all finished, the Owl, as a boon,
		    <br>
		  Was kindly permitted to pocket the spoon:
		    <br>
		  While the Panther received knife and fork with a growl,
		    <br>
		  And concluded the banquet&mdash;]
		    </p>
		    <p>
		      &lsquo;What <i>is</i> the use of repeating all that stuff,&rsquo; the Mock Turtle
		      interrupted, &lsquo;if you don&rsquo;t explain it as you go on? It&rsquo;s by far the most
		      confusing thing <i>I</i> ever heard!&rsquo;
		    </p>
		    <p>
		      &lsquo;Yes, I think you&rsquo;d better leave off,&rsquo; said the Gryphon: and Alice was
		      only too glad to do so.
		    </p>
		    <p>
		      &lsquo;Shall we try another figure of the Lobster Quadrille?&rsquo; the Gryphon went
		      on. &lsquo;Or would you like the Mock Turtle to sing you a song?&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, a song, please, if the Mock Turtle would be so kind,&rsquo; Alice replied,
		      so eagerly that the Gryphon said, in a rather offended tone, &lsquo;Hm! No
		      accounting for tastes! Sing her &ldquo;<i>Turtle Soup</i>,&rdquo; will you, old fellow?&rsquo;
		    </p>
		    <p>
		      The Mock Turtle sighed deeply, and began, in a voice sometimes choked with
		      sobs, to sing this:&mdash;
		    </p>
		    <p class='aiw-soup stanza'>
		   &lsquo;Beautiful Soup, so rich and green,
		    <br>
		   Waiting in a hot tureen!
		    <br>
		   Who for such dainties would not stoop?
		    <br>
		   Soup of the evening, beautiful Soup!
		    <br>
		   Soup of the evening, beautiful Soup!
		    <br>
		     Beau&mdash;ootiful Soo&mdash;oop!
		    <br>
		     Beau&mdash;ootiful Soo&mdash;oop!
		    <br>
		   Soo&mdash;oop of the e&mdash;e&mdash;evening,
		    <br>
		     Beautiful, beautiful Soup!
		    </p>
		    <p class='aiw-soup stanza'>
		   &lsquo;Beautiful Soup! Who cares for fish,
		    <br>
		   Game, or any other dish?
		    <br>
		   Who would not give all else for two
		    <br>
		   Pennyworth only of beautiful Soup?
		    <br>
		   Pennyworth only of beautiful Soup?
		    <br>
		     Beau&mdash;ootiful Soo&mdash;oop!
		    <br>
		     Beau&mdash;ootiful Soo&mdash;oop!
		    <br>
		   Soo&mdash;oop of the e&mdash;e&mdash;evening,
		    <br>
		     Beautiful, beauti&mdash;FUL SOUP!&rsquo;
		    </p>
		    <p>
		      &lsquo;Chorus again!&rsquo; cried the Gryphon, and the Mock Turtle had just begun to
		      repeat it, when a cry of &lsquo;The trial&rsquo;s beginning!&rsquo; was heard in the
		      distance.
		    </p>
		    <p>
		      &lsquo;Come on!&rsquo; cried the Gryphon, and, taking Alice by the hand, it hurried
		      off, without waiting for the end of the song.
		    </p>
		    <p>
		      &lsquo;What trial is it?&rsquo; Alice panted as she ran; but the Gryphon only answered
		      &lsquo;Come on!&rsquo; and ran the faster, while more and more faintly came, carried
		      on the breeze that followed them, the melancholy words:&mdash;
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Who Stole the Tarts?",
			'number' => "Eleven",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      The King and Queen of Hearts were seated on their throne when they
		      arrived, with a great crowd assembled about them&mdash;all sorts of little
		      birds and beasts, as well as the whole pack of cards: the Knave was
		      standing before them, in chains, with a soldier on each side to guard him;
		      and near the King was the White Rabbit, with a trumpet in one hand, and a
		      scroll of parchment in the other. In the very middle of the court was a
		      table, with a large dish of tarts upon it: they looked so good, that it
		      made Alice quite hungry to look at them&mdash;&lsquo;I wish they&rsquo;d get the trial
		      done,&rsquo; she thought, &lsquo;and hand round the refreshments!&rsquo; But there seemed to
		      be no chance of this, so she began looking at everything about her, to
		      pass away the time.
		    </p>
		    <p>
		      Alice had never been in a court of justice before, but she had read about
		      them in books, and she was quite pleased to find that she knew the name of
		      nearly everything there. &lsquo;That&rsquo;s the judge,&rsquo; she said to herself, &lsquo;because
		      of his great wig.&rsquo;
		    </p>
		    <p>
		      The judge, by the way, was the King; and as he wore his crown over the
		      wig, (look at the frontispiece if you want to see how he did it,) he did
		      not look at all comfortable, and it was certainly not becoming.
		    </p>
		    <p>
		      &lsquo;And that&rsquo;s the jury-box,&rsquo; thought Alice, &lsquo;and those twelve creatures,&rsquo;
		      (she was obliged to say &lsquo;creatures,&rsquo; you see, because some of them were
		      animals, and some were birds,) &lsquo;I suppose they are the jurors.&rsquo; She said
		      this last word two or three times over to herself, being rather proud of
		      it: for she thought, and rightly too, that very few little girls of her
		      age knew the meaning of it at all. However, &lsquo;jury-men&rsquo; would have done
		      just as well.
		    </p>
		    <p>
		      The twelve jurors were all writing very busily on slates. &lsquo;What are they
		      doing?&rsquo; Alice whispered to the Gryphon. &lsquo;They can&rsquo;t have anything to put
		      down yet, before the trial&rsquo;s begun.&rsquo;
		    </p>
		    <p>
		      &lsquo;They&rsquo;re putting down their names,&rsquo; the Gryphon whispered in reply, &lsquo;for
		      fear they should forget them before the end of the trial.&rsquo;
		    </p>
		    <p>
		      &lsquo;Stupid things!&rsquo; Alice began in a loud, indignant voice, but she stopped
		      hastily, for the White Rabbit cried out, &lsquo;Silence in the court!&rsquo; and the
		      King put on his spectacles and looked anxiously round, to make out who was
		      talking.
		    </p>
		    <p>
		      Alice could see, as well as if she were looking over their shoulders, that
		      all the jurors were writing down &lsquo;stupid things!&rsquo; on their slates, and she
		      could even make out that one of them didn&rsquo;t know how to spell &lsquo;stupid,&rsquo;
		      and that he had to ask his neighbour to tell him. &lsquo;A nice muddle their
		      slates&rsquo;ll be in before the trial&rsquo;s over!&rsquo; thought Alice.
		    </p>
		    <p>
		      One of the jurors had a pencil that squeaked. This of course, Alice could
		      <i>not</i> stand, and she went round the court and got behind him, and very soon
		      found an opportunity of taking it away. She did it so quickly that the
		      poor little juror (it was Bill, the Lizard) could not make out at all what
		      had become of it; so, after hunting all about for it, he was obliged to
		      write with one finger for the rest of the day; and this was of very little
		      use, as it left no mark on the slate.
		    </p>
		    <p>
		      &lsquo;Herald, read the accusation!&rsquo; said the King.
		    </p>
		    <p>
		      On this the White Rabbit blew three blasts on the trumpet, and then
		      unrolled the parchment scroll, and read as follows:&mdash;
		    </p>
		    <p class='aiw-tarts stanza'>
		   &lsquo;The Queen of Hearts, she made some tarts,
		    <br>
		      All on a summer day:
		    <br>
		    The Knave of Hearts, he stole those tarts,
		    <br>
		      And took them quite away!&rsquo;
		    </p>
		    <p>
		      &lsquo;Consider your verdict,&rsquo; the King said to the jury.
		    </p>
		    <p>
		      &lsquo;Not yet, not yet!&rsquo; the Rabbit hastily interrupted. &lsquo;There&rsquo;s a great deal
		      to come before that!&rsquo;
		    </p>
		    <p>
		      &lsquo;Call the first witness,&rsquo; said the King; and the White Rabbit blew three
		      blasts on the trumpet, and called out, &lsquo;First witness!&rsquo;
		    </p>
		    <p>
		      The first witness was the Hatter. He came in with a teacup in one hand and
		      a piece of bread-and-butter in the other. &lsquo;I beg pardon, your Majesty,&rsquo; he
		      began, &lsquo;for bringing these in: but I hadn&rsquo;t quite finished my tea when I
		      was sent for.&rsquo;
		    </p>
		    <p>
		      &lsquo;You ought to have finished,&rsquo; said the King. &lsquo;When did you begin?&rsquo;
		    </p>
		    <p>
		      The Hatter looked at the March Hare, who had followed him into the court,
		      arm-in-arm with the Dormouse. &lsquo;Fourteenth of March, I <i>think</i> it was,&rsquo; he
		      said.
		    </p>
		    <p>
		      &lsquo;Fifteenth,&rsquo; said the March Hare.
		    </p>
		    <p>
		      &lsquo;Sixteenth,&rsquo; added the Dormouse.
		    </p>
		    <p>
		      &lsquo;Write that down,&rsquo; the King said to the jury, and the jury eagerly wrote
		      down all three dates on their slates, and then added them up, and reduced
		      the answer to shillings and pence.
		    </p>
		    <p>
		      &lsquo;Take off your hat,&rsquo; the King said to the Hatter.
		    </p>
		    <p>
		      &lsquo;It isn&rsquo;t mine,&rsquo; said the Hatter.
		    </p>
		    <p>
		      &lsquo;<i>Stolen</i>!&rsquo; the King exclaimed, turning to the jury, who instantly made a
		      memorandum of the fact.
		    </p>
		    <p>
		      &lsquo;I keep them to sell,&rsquo; the Hatter added as an explanation; &lsquo;I&rsquo;ve none of
		      my own. I&rsquo;m a hatter.&rsquo;
		    </p>
		    <p>
		      Here the Queen put on her spectacles, and began staring at the Hatter, who
		      turned pale and fidgeted.
		    </p>
		    <p>
		      &lsquo;Give your evidence,&rsquo; said the King; &lsquo;and don&rsquo;t be nervous, or I&rsquo;ll have
		      you executed on the spot.&rsquo;
		    </p>
		    <p>
		      This did not seem to encourage the witness at all: he kept shifting from
		      one foot to the other, looking uneasily at the Queen, and in his confusion
		      he bit a large piece out of his teacup instead of the bread-and-butter.
		    </p>
		    <p>
		      Just at this moment Alice felt a very curious sensation, which puzzled her
		      a good deal until she made out what it was: she was beginning to grow
		      larger again, and she thought at first she would get up and leave the
		      court; but on second thoughts she decided to remain where she was as long
		      as there was room for her.
		    </p>
		    <p>
		      &lsquo;I wish you wouldn&rsquo;t squeeze so.&rsquo; said the Dormouse, who was sitting next
		      to her. &lsquo;I can hardly breathe.&rsquo;
		    </p>
		    <p>
		      &lsquo;I can&rsquo;t help it,&rsquo; said Alice very meekly: &lsquo;I&rsquo;m growing.&rsquo;
		    </p>
		    <p>
		      &lsquo;You&rsquo;ve no right to grow <i>here</i>,&rsquo; said the Dormouse.
		    </p>
		    <p>
		      &lsquo;Don&rsquo;t talk nonsense,&rsquo; said Alice more boldly: &lsquo;you know you&rsquo;re growing
		      too.&rsquo;
		    </p>
		    <p>
		      &lsquo;Yes, but <i>I</i> grow at a reasonable pace,&rsquo; said the Dormouse: &lsquo;not in that
		      ridiculous fashion.&rsquo; And he got up very sulkily and crossed over to the
		      other side of the court.
		    </p>
		    <p>
		      All this time the Queen had never left off staring at the Hatter, and,
		      just as the Dormouse crossed the court, she said to one of the officers of
		      the court, &lsquo;Bring me the list of the singers in the last concert!&rsquo; on
		      which the wretched Hatter trembled so, that he shook both his shoes off.
		    </p>
		    <p>
		      &lsquo;Give your evidence,&rsquo; the King repeated angrily, &lsquo;or I&rsquo;ll have you
		      executed, whether you&rsquo;re nervous or not.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m a poor man, your Majesty,&rsquo; the Hatter began, in a trembling voice, &lsquo;&mdash;and
		      I hadn&rsquo;t begun my tea&mdash;not above a week or so&mdash;and what with the
		      bread-and-butter getting so thin&mdash;and the twinkling of the tea&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;The twinkling of the <i>what</i>?&rsquo; said the King.
		    </p>
		    <p>
		      &lsquo;It <i>began</i> with the tea,&rsquo; the Hatter replied.
		    </p>
		    <p>
		      &lsquo;Of course twinkling begins with a T!&rsquo; said the King sharply. &lsquo;Do you take
		      me for a dunce? Go on!&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m a poor man,&rsquo; the Hatter went on, &lsquo;and most things twinkled after that&mdash;only
		      the March Hare said&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;I didn&rsquo;t!&rsquo; the March Hare interrupted in a great hurry.
		    </p>
		    <p>
		      &lsquo;You did!&rsquo; said the Hatter.
		    </p>
		    <p>
		      &lsquo;I deny it!&rsquo; said the March Hare.
		    </p>
		    <p>
		      &lsquo;He denies it,&rsquo; said the King: &lsquo;leave out that part.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, at any rate, the Dormouse said&mdash;&rsquo; the Hatter went on, looking
		      anxiously round to see if he would deny it too: but the Dormouse denied
		      nothing, being fast asleep.
		    </p>
		    <p>
		      &lsquo;After that,&rsquo; continued the Hatter, &lsquo;I cut some more bread-and-butter&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;But what did the Dormouse say?&rsquo; one of the jury asked.
		    </p>
		    <p>
		      &lsquo;That I can&rsquo;t remember,&rsquo; said the Hatter.
		    </p>
		    <p>
		      &lsquo;You <i>must</i> remember,&rsquo; remarked the King, &lsquo;or I&rsquo;ll have you executed.&rsquo;
		    </p>
		    <p>
		      The miserable Hatter dropped his teacup and bread-and-butter, and went
		      down on one knee. &lsquo;I&rsquo;m a poor man, your Majesty,&rsquo; he began.
		    </p>
		    <p>
		      &lsquo;You&rsquo;re a <i>very</i> poor <i>speaker</i>,&rsquo; said the King.
		    </p>
		    <p>
		      Here one of the guinea-pigs cheered, and was immediately suppressed by the
		      officers of the court. (As that is rather a hard word, I will just explain
		      to you how it was done. They had a large canvas bag, which tied up at the
		      mouth with strings: into this they slipped the guinea-pig, head first, and
		      then sat upon it.)
		    </p>
		    <p>
		      &lsquo;I&rsquo;m glad I&rsquo;ve seen that done,&rsquo; thought Alice. &lsquo;I&rsquo;ve so often read in the
		      newspapers, at the end of trials, &ldquo;There was some attempts at applause,
		      which was immediately suppressed by the officers of the court,&rdquo; and I
		      never understood what it meant till now.&rsquo;
		    </p>
		    <p>
		      &lsquo;If that&rsquo;s all you know about it, you may stand down,&rsquo; continued the King.
		    </p>
		    <p>
		      &lsquo;I can&rsquo;t go no lower,&rsquo; said the Hatter: &lsquo;I&rsquo;m on the floor, as it is.&rsquo;
		    </p>
		    <p>
		      &lsquo;Then you may <i>sit</i> down,&rsquo; the King replied.
		    </p>
		    <p>
		      Here the other guinea-pig cheered, and was suppressed.
		    </p>
		    <p>
		      &lsquo;Come, that finished the guinea-pigs!&rsquo; thought Alice. &lsquo;Now we shall get on
		      better.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;d rather finish my tea,&rsquo; said the Hatter, with an anxious look at the
		      Queen, who was reading the list of singers.
		    </p>
		    <p>
		      &lsquo;You may go,&rsquo; said the King, and the Hatter hurriedly left the court,
		      without even waiting to put his shoes on.
		    </p>
		    <p>
		      &lsquo;&mdash;and just take his head off outside,&rsquo; the Queen added to one of the
		      officers: but the Hatter was out of sight before the officer could get to
		      the door.
		    </p>
		    <p>
		      &lsquo;Call the next witness!&rsquo; said the King.
		    </p>
		    <p>
		      The next witness was the Duchess&rsquo;s cook. She carried the pepper-box in her
		      hand, and Alice guessed who it was, even before she got into the court, by
		      the way the people near the door began sneezing all at once.
		    </p>
		    <p>
		      &lsquo;Give your evidence,&rsquo; said the King.
		    </p>
		    <p>
		      &lsquo;Shan&rsquo;t,&rsquo; said the cook.
		    </p>
		    <p>
		      The King looked anxiously at the White Rabbit, who said in a low voice,
		      &lsquo;Your Majesty must cross-examine <i>this</i> witness.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, if I must, I must,&rsquo; the King said, with a melancholy air, and,
		      after folding his arms and frowning at the cook till his eyes were nearly
		      out of sight, he said in a deep voice, &lsquo;What are tarts made of?&rsquo;
		    </p>
		    <p>
		      &lsquo;Pepper, mostly,&rsquo; said the cook.
		    </p>
		    <p>
		      &lsquo;Treacle,&rsquo; said a sleepy voice behind her.
		    </p>
		    <p>
		      &lsquo;Collar that Dormouse,&rsquo; the Queen shrieked out. &lsquo;Behead that Dormouse!
		      Turn that Dormouse out of court! Suppress him! Pinch him! Off with his
		      whiskers!&rsquo;
		    </p>
		    <p>
		      For some minutes the whole court was in confusion, getting the Dormouse
		      turned out, and, by the time they had settled down again, the cook had
		      disappeared.
		    </p>
		    <p>
		      &lsquo;Never mind!&rsquo; said the King, with an air of great relief. &lsquo;Call the next
		      witness.&rsquo; And he added in an undertone to the Queen, &lsquo;Really, my dear, <i>you</i>
		      must cross-examine the next witness. It quite makes my forehead ache!&rsquo;
		    </p>
		    <p>
		      Alice watched the White Rabbit as he fumbled over the list, feeling very
		      curious to see what the next witness would be like, &lsquo;&mdash;for they
		      haven&rsquo;t got much evidence <i>yet</i>,&rsquo; she said to herself. Imagine her surprise,
		      when the White Rabbit read out, at the top of his shrill little voice, the
		      name &lsquo;Alice!&rsquo;
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Alice’s Evidence",
			'number' => "Twelve",
			'order' => 12,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      &lsquo;Here!&rsquo; cried Alice, quite forgetting in the flurry of the moment how
		      large she had grown in the last few minutes, and she jumped up in such a
		      hurry that she tipped over the jury-box with the edge of her skirt,
		      upsetting all the jurymen on to the heads of the crowd below, and there
		      they lay sprawling about, reminding her very much of a globe of goldfish
		      she had accidentally upset the week before.
		    </p>
		    <p>
		      &lsquo;Oh, I <i>beg</i> your pardon!&rsquo; she exclaimed in a tone of great dismay, and
		      began picking them up again as quickly as she could, for the accident of
		      the goldfish kept running in her head, and she had a vague sort of idea
		      that they must be collected at once and put back into the jury-box, or
		      they would die.
		    </p>
		    <p>
		      &lsquo;The trial cannot proceed,&rsquo; said the King in a very grave voice, &lsquo;until
		      all the jurymen are back in their proper places&mdash;<i>all</i>,&rsquo; he repeated
		      with great emphasis, looking hard at Alice as he said do.
		    </p>
		    <p>
		      Alice looked at the jury-box, and saw that, in her haste, she had put the
		      Lizard in head downwards, and the poor little thing was waving its tail
		      about in a melancholy way, being quite unable to move. She soon got it out
		      again, and put it right; &lsquo;not that it signifies much,&rsquo; she said to
		      herself; &lsquo;I should think it would be <i>quite</i> as much use in the trial one
		      way up as the other.&rsquo;
		    </p>
		    <p>
		      As soon as the jury had a little recovered from the shock of being upset,
		      and their slates and pencils had been found and handed back to them, they
		      set to work very diligently to write out a history of the accident, all
		      except the Lizard, who seemed too much overcome to do anything but sit
		      with its mouth open, gazing up into the roof of the court.
		    </p>
		    <p>
		      &lsquo;What do you know about this business?&rsquo; the King said to Alice.
		    </p>
		    <p>
		      &lsquo;Nothing,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Nothing <i>whatever</i>?&rsquo; persisted the King.
		    </p>
		    <p>
		      &lsquo;Nothing whatever,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s very important,&rsquo; the King said, turning to the jury. They were
		      just beginning to write this down on their slates, when the White Rabbit
		      interrupted: &lsquo;<i>Un</i>important, your Majesty means, of course,&rsquo; he said in a
		      very respectful tone, but frowning and making faces at him as he spoke.
		    </p>
		    <p>
		      &lsquo;<i>Un</i>important, of course, I meant,&rsquo; the King hastily said, and went on to
		      himself in an undertone,
		    </p>
		    <p>
		      &lsquo;important&mdash;unimportant&mdash;unimportant&mdash;important&mdash;&rsquo; as
		      if he were trying which word sounded best.
		    </p>
		    <p>
		      Some of the jury wrote it down &lsquo;important,&rsquo; and some &lsquo;unimportant.&rsquo; Alice
		      could see this, as she was near enough to look over their slates; &lsquo;but it
		      doesn&rsquo;t matter a bit,&rsquo; she thought to herself.
		    </p>
		    <p>
		      At this moment the King, who had been for some time busily writing in his
		      note-book, cackled out &lsquo;Silence!&rsquo; and read out from his book, &lsquo;Rule
		      Forty-two. <i>All persons more than a mile high to leave the court</i>.&rsquo;
		    </p>
		    <p>
		      Everybody looked at Alice.
		    </p>
		    <p>
		      &lsquo;<i>I&rsquo;m</i> not a mile high,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;You are,&rsquo; said the King.
		    </p>
		    <p>
		      &lsquo;Nearly two miles high,&rsquo; added the Queen.
		    </p>
		    <p>
		      &lsquo;Well, I shan&rsquo;t go, at any rate,&rsquo; said Alice: &lsquo;besides, that&rsquo;s not a
		      regular rule: you invented it just now.&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s the oldest rule in the book,&rsquo; said the King.
		    </p>
		    <p>
		      &lsquo;Then it ought to be Number One,&rsquo; said Alice.
		    </p>
		    <p>
		      The King turned pale, and shut his note-book hastily. &lsquo;Consider your
		      verdict,&rsquo; he said to the jury, in a low, trembling voice.
		    </p>
		    <p>
		      &lsquo;There&rsquo;s more evidence to come yet, please your Majesty,&rsquo; said the White
		      Rabbit, jumping up in a great hurry; &lsquo;this paper has just been picked up.&rsquo;
		    </p>
		    <p>
		      &lsquo;What&rsquo;s in it?&rsquo; said the Queen.
		    </p>
		    <p>
		      &lsquo;I haven&rsquo;t opened it yet,&rsquo; said the White Rabbit, &lsquo;but it seems to be a
		      letter, written by the prisoner to&mdash;to somebody.&rsquo;
		    </p>
		    <p>
		      &lsquo;It must have been that,&rsquo; said the King, &lsquo;unless it was written to nobody,
		      which isn&rsquo;t usual, you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;Who is it directed to?&rsquo; said one of the jurymen.
		    </p>
		    <p>
		      &lsquo;It isn&rsquo;t directed at all,&rsquo; said the White Rabbit; &lsquo;in fact, there&rsquo;s
		      nothing written on the <i>outside</i>.&rsquo; He unfolded the paper as he spoke, and
		      added &lsquo;It isn&rsquo;t a letter, after all: it&rsquo;s a set of verses.&rsquo;
		    </p>
		    <p>
		      &lsquo;Are they in the prisoner&rsquo;s handwriting?&rsquo; asked another of the jurymen.
		    </p>
		    <p>
		      &lsquo;No, they&rsquo;re not,&rsquo; said the White Rabbit, &lsquo;and that&rsquo;s the queerest thing
		      about it.&rsquo; (The jury all looked puzzled.)
		    </p>
		    <p>
		      &lsquo;He must have imitated somebody else&rsquo;s hand,&rsquo; said the King. (The jury all
		      brightened up again.)
		    </p>
		    <p>
		      &lsquo;Please your Majesty,&rsquo; said the Knave, &lsquo;I didn&rsquo;t write it, and they can&rsquo;t
		      prove I did: there&rsquo;s no name signed at the end.&rsquo;
		    </p>
		    <p>
		      &lsquo;If you didn&rsquo;t sign it,&rsquo; said the King, &lsquo;that only makes the matter worse.
		      You <i>must</i> have meant some mischief, or else you&rsquo;d have signed your name
		      like an honest man.&rsquo;
		    </p>
		    <p>
		      There was a general clapping of hands at this: it was the first really
		      clever thing the King had said that day.
		    </p>
		    <p>
		      &lsquo;That <i>proves</i> his guilt,&rsquo; said the Queen.
		    </p>
		    <p>
		      &lsquo;It proves nothing of the sort!&rsquo; said Alice. &lsquo;Why, you don&rsquo;t even know
		      what they&rsquo;re about!&rsquo;
		    </p>
		    <p>
		      &lsquo;Read them,&rsquo; said the King.
		    </p>
		    <p>
		      The White Rabbit put on his spectacles. &lsquo;Where shall I begin, please your
		      Majesty?&rsquo; he asked.
		    </p>
		    <p>
		      &lsquo;Begin at the beginning,&rsquo; the King said gravely, &lsquo;and go on till you come
		      to the end: then stop.&rsquo;
		    </p>
		    <p>
		      These were the verses the White Rabbit read:&mdash;
		    </p>
		    <p class='aiw-swim stanza'>
		   &lsquo;They told me you had been to her,
		    <br>
		    And mentioned me to him:
		    <br>
		   She gave me a good character,
		    <br>
		    But said I could not swim.
		    </p>
		    <p class='aiw-swim stanza'>
		   He sent them word I had not gone
		    <br>
		    (We know it to be true):
		    <br>
		   If she should push the matter on,
		    <br>
		    What would become of you?
		    </p>
		    <p class='aiw-swim stanza'>
		   I gave her one, they gave him two,
		    <br>
		    You gave us three or more;
		    <br>
		   They all returned from him to you,
		    <br>
		    Though they were mine before.
		    </p>
		    <p class='aiw-swim stanza'>
		   If I or she should chance to be
		    <br>
		    Involved in this affair,
		    <br>
		   He trusts to you to set them free,
		    <br>
		    Exactly as we were.
		    </p>
		    <p class='aiw-swim stanza'>
		   My notion was that you had been
		    <br>
		    (Before she had this fit)
		    <br>
		   An obstacle that came between
		    <br>
		    Him, and ourselves, and it.
		    </p>
		    <p class='aiw-swim stanza'>
		   Don&rsquo;t let him know she liked them best,
		    <br>
		    For this must ever be
		    <br>
		   A secret, kept from all the rest,
		    <br>
		    Between yourself and me.&rsquo;
		    </p>
		    <p>
		      &lsquo;That&rsquo;s the most important piece of evidence we&rsquo;ve heard yet,&rsquo; said the
		      King, rubbing his hands; &lsquo;so now let the jury&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;If any one of them can explain it,&rsquo; said Alice, (she had grown so large
		      in the last few minutes that she wasn&rsquo;t a bit afraid of interrupting him,)
		      &lsquo;I&rsquo;ll give him sixpence. <i>I</i> don&rsquo;t believe there&rsquo;s an atom of meaning
		      in it.&rsquo;
		    </p>
		    <p>
		      The jury all wrote down on their slates, &lsquo;<i>She</i> doesn&rsquo;t believe there&rsquo;s an
		      atom of meaning in it,&rsquo; but none of them attempted to explain the paper.
		    </p>
		    <p>
		      &lsquo;If there&rsquo;s no meaning in it,&rsquo; said the King, &lsquo;that saves a world of
		      trouble, you know, as we needn&rsquo;t try to find any. And yet I don&rsquo;t know,&rsquo;
		      he went on, spreading out the verses on his knee, and looking at them with
		      one eye; &lsquo;I seem to see some meaning in them, after all. &ldquo;&mdash;<i>said I
		      could not swim</i>&mdash;&rdquo; you can&rsquo;t swim, can you?&rsquo; he added, turning to the
		      Knave.
		    </p>
		    <p>
		      The Knave shook his head sadly. &lsquo;Do I look like it?&rsquo; he said. (Which he
		      certainly did <i>not</i>, being made entirely of cardboard.)
		    </p>
		    <p>
		      &lsquo;All right, so far,&rsquo; said the King, and he went on muttering over the
		      verses to himself: &lsquo;&ldquo;<i>We know it to be true</i>&mdash;&rdquo; that&rsquo;s the jury, of
		      course&mdash;&ldquo;<i>I gave her one, they gave him two</i>&mdash;&rdquo; why, that must be
		      what he did with the tarts, you know&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;But, it goes on &ldquo;<i>they all returned from him to you</i>,&rdquo;&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Why, there they are!&rsquo; said the King triumphantly, pointing to the tarts
		      on the table. &lsquo;Nothing can be clearer than <i>that</i>. Then again&mdash;&ldquo;<i>before
		      she had this fit</i>&mdash;&rdquo; you never had fits, my dear, I think?&rsquo; he said to
		      the Queen.
		    </p>
		    <p>
		      &lsquo;Never!&rsquo; said the Queen furiously, throwing an inkstand at the Lizard as
		      she spoke. (The unfortunate little Bill had left off writing on his slate
		      with one finger, as he found it made no mark; but he now hastily began
		      again, using the ink, that was trickling down his face, as long as it
		      lasted.)
		    </p>
		    <p>
		      &lsquo;Then the words don&rsquo;t <i>fit</i> you,&rsquo; said the King, looking round the court
		      with a smile. There was a dead silence.
		    </p>
		    <p>
		      &lsquo;It&rsquo;s a pun!&rsquo; the King added in an offended tone, and everybody laughed,
		      &lsquo;Let the jury consider their verdict,&rsquo; the King said, for about the
		      twentieth time that day.
		    </p>
		    <p>
		      &lsquo;No, no!&rsquo; said the Queen. &lsquo;Sentence first&mdash;verdict afterwards.&rsquo;
		    </p>
		    <p>
		      &lsquo;Stuff and nonsense!&rsquo; said Alice loudly. &lsquo;The idea of having the sentence
		      first!&rsquo;
		    </p>
		    <p>
		      &lsquo;Hold your tongue!&rsquo; said the Queen, turning purple.
		    </p>
		    <p>
		      &lsquo;I won&rsquo;t!&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Off with her head!&rsquo; the Queen shouted at the top of her voice. Nobody
		      moved.
		    </p>
		    <p>
		      &lsquo;Who cares for you?&rsquo; said Alice, (she had grown to her full size by this
		      time.) &lsquo;You&rsquo;re nothing but a pack of cards!&rsquo;
		    </p>
		    <p>
		      At this the whole pack rose up into the air, and came flying down upon
		      her: she gave a little scream, half of fright and half of anger, and tried
		      to beat them off, and found herself lying on the bank, with her head in
		      the lap of her sister, who was gently brushing away some dead leaves that
		      had fluttered down from the trees upon her face.
		    </p>
		    <p>
		      &lsquo;Wake up, Alice dear!&rsquo; said her sister; &lsquo;Why, what a long sleep you&rsquo;ve
		      had!&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, I&rsquo;ve had such a curious dream!&rsquo; said Alice, and she told her sister,
		      as well as she could remember them, all these strange Adventures of hers
		      that you have just been reading about; and when she had finished, her
		      sister kissed her, and said, &lsquo;It <i>was</i> a curious dream, dear, certainly: but
		      now run in to your tea; it&rsquo;s getting late.&rsquo; So Alice got up and ran off,
		      thinking while she ran, as well she might, what a wonderful dream it had
		      been.
		    </p>
		    <p>
		      But her sister sat still just as she left her, leaning her head on her
		      hand, watching the setting sun, and thinking of little Alice and all her
		      wonderful Adventures, till she too began dreaming after a fashion, and
		      this was her dream:&mdash;
		    </p>
		    <p>
		      First, she dreamed of little Alice herself, and once again the tiny hands
		      were clasped upon her knee, and the bright eager eyes were looking up into
		      hers&mdash;she could hear the very tones of her voice, and see that queer
		      little toss of her head to keep back the wandering hair that <i>would</i> always
		      get into her eyes&mdash;and still as she listened, or seemed to listen,
		      the whole place around her became alive with the strange creatures of her
		      little sister&rsquo;s dream.
		    </p>
		    <p>
		      The long grass rustled at her feet as the White Rabbit hurried by&mdash;the
		      frightened Mouse splashed his way through the neighbouring pool&mdash;she
		      could hear the rattle of the teacups as the March Hare and his friends
		      shared their never-ending meal, and the shrill voice of the Queen ordering
		      off her unfortunate guests to execution&mdash;once more the pig-baby was
		      sneezing on the Duchess&rsquo;s knee, while plates and dishes crashed around it&mdash;once
		      more the shriek of the Gryphon, the squeaking of the Lizard&rsquo;s
		      slate-pencil, and the choking of the suppressed guinea-pigs, filled the
		      air, mixed up with the distant sobs of the miserable Mock Turtle.
		    </p>
		    <p>
		      So she sat on, with closed eyes, and half believed herself in Wonderland,
		      though she knew she had but to open them again, and all would change to
		      dull reality&mdash;the grass would be only rustling in the wind, and the
		      pool rippling to the waving of the reeds&mdash;the rattling teacups would
		      change to tinkling sheep-bells, and the Queen&rsquo;s shrill cries to the voice
		      of the shepherd boy&mdash;and the sneeze of the baby, the shriek of the
		      Gryphon, and all the other queer noises, would change (she knew) to the
		      confused clamour of the busy farm-yard&mdash;while the lowing of the
		      cattle in the distance would take the place of the Mock Turtle&rsquo;s heavy
		      sobs.
		    </p>
		    <p>
		      Lastly, she pictured to herself how this same little sister of hers would,
		      in the after-time, be herself a grown woman; and how she would keep,
		      through all her riper years, the simple and loving heart of her childhood:
		      and how she would gather about her other little children, and make <i>their</i>
		      eyes bright and eager with many a strange tale, perhaps even with the
		      dream of Wonderland of long ago: and how she would feel with all their
		      simple sorrows, and find a pleasure in all their simple joys, remembering
		      her own child-life, and the happy summer days.
		    </p>
		    <p class='aiw-end'>
		              THE END
		    </p>
			"
		]);
	}
}
