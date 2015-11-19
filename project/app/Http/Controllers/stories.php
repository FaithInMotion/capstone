<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\story;
use App\Story_Photo;
use App\Http\Requests;
use App\Http\Requests\StoryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class stories extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function list_stories($story_id)
    {
        $data = array();

        //Retreive all stores
        $story = stories::where('story_id', '=', $story_id)->get();

        //Store in data and move to model
        $data['story'] = $story;

        return view('story/list', $data);
    }

    public function show($id)
    {
        $story = story::with('photos')->where(compact('id'))->first();
        //if database is NOT empty redirect continue to Retreive

        if( !empty( $story ) )
        {
            //Pull data from database where story = id
            return view( 'story/show' , compact( 'story' ) );
        }
        //else redirect to create page
        else
        {
            return redirect()->action( 'stories@create' );
        }
    }

    /**
     * Stores the photo(s) given in Dropzone
     */
    public function addPhoto($story_id, Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|mimes:jpg,jpeg,png'
        ]);

        /*
         * Create the photo object that will be stored
         */
        $photo = Story_Photo::fromForm( $request->file( 'photo' ), $story_id );

        /*
         * Store the link to the database
         */
        story::foundAt( $story_id )->addPhoto( $photo );

        return "Done";
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*
         * Get the user id and send it through with data
         */
        $data['user_id'] = Auth::id();

        return view( 'story/create', $data );
        //creates the story
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoryRequest $request)
    {
        $story = story::create($request->all());

        $id = $story->id;

        return redirect()->route('story', [$id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function seed_story_table()
    {

        $story = new story();
        $story->user_id = Auth::id();
        $story->title= "The Hunger Games";
        $story->genre = "Adventure";
        $story->synopsis = "The nation of Panem, formed from a post-apocalyptic North America, is a country that consists of a wealthy Capitol region surrounded by 12 poorer districts. Early in its history, a rebellion led by a 13th district against the Capitol resulted in its destruction and the creation of an annual televised event known as the Hunger Games. In punishment, and as a reminder of the power and grace of the Capitol, each district must yield one boy and one girl between the ages of 12 and 18 through a lottery system to participate in the games. The 'tributes' are chosen during the annual Reaping and are forced to fight to the death, leaving only one survivor to claim victory.
";
        $story->Save();

        print_r('saved 1');

        $story = new story();
        $story->user_id = Auth::id();
        $story->title= "The Da Vinci Code";
        $story->genre = "Mystery";
        $story->synopsis = "an ingenious code hidden in the works of Leonardo da Vinci. A desperate race through the cathedrals and castles of Europe. An astonishing truth concealed for centuries . . . unveiled at last.
While in Paris, Harvard symbologist Robert Langdon is awakened by a phone call in the dead of the night. The elderly curator of the Louvre has been murdered inside the museum, his body covered in baffling symbols. As Langdon and gifted French cryptologist Sophie Neveu sort through the bizarre riddles, they are stunned to discover a trail of clues hidden in the works of Leonardo da Vinci—clues visible for all to see and yet ingeniously disguised by the painter.
Even more startling, the late curator was involved in the Priory of Sion—a secret society whose members included Sir Isaac Newton, Victor Hugo, and Da Vinci—and he guarded a breathtaking historical secret. Unless Langdon and Neveu can decipher the labyrinthine puzzle—while avoiding the faceless adversary who shadows their every move—the explosive, ancient truth will be lost forever.";
        $story->Save();

        $story = new story();
        $story->user_id = Auth::id();
        $story->title= "A Game of Thrones";
        $story->genre = "Fantasy";
        $story->synopsis = "Summers span decades. Winter can last a lifetime. And the struggle for the Iron Throne has begun.
As Warden of the north, Lord Eddard Stark counts it a curse when King Robert bestows on him the office of the Hand. His honour weighs him down at court where a true man does what he will, not what he must … and a dead enemy is a thing of beauty.
The old gods have no power in the south, Stark’s family is split and there is treachery at court. Worse, the vengeance-mad heir of the deposed Dragon King has grown to maturity in exile in the Free Cities. He claims the Iron Throne.";
        $story->Save();

        $story = new story();
        $story->user_id = Auth::id();
        $story->title= "Harry Potter and the Order of the Phoenix";
        $story->genre = "Fantasy";
        $story->synopsis = "Harry Potter is due to start his fifth year at Hogwarts School of Witchcraft and Wizardry. His best friends Ron and Hermione have been very secretive all summer and he is desperate to get back to school and find out what has been going on. However, what Harry discovers is far more devastating than he could ever have expected…";
        $story->Save();

        $story = new story();
        $story->user_id = Auth::id();
        $story->title= "The Giving Tree";
        $story->genre = "Children";
        $story->synopsis = "So begins a story of unforgettable perception, beautifully written and illustrated by the gifted and versatile Shel Silverstein.

Every day the boy would come to the tree to eat her apples, swing from her branches, or slide down her trunk...and the tree was happy. But as the boy grew older he began to want more from the tree, and the tree gave and gave and gave.";
        $story->Save();

        $story = new story();
        $story->user_id = Auth::id();
        $story->title= "The Fault in Our Stars";
        $story->genre = "Young-adult fiction";
        $story->synopsis = "Despite the tumor-shrinking medical miracle that has bought her a few years, Hazel has never been anything but terminal, her final chapter inscribed upon diagnosis. But when a gorgeous plot twist named Augustus Waters suddenly appears at Cancer Kid Support Group, Hazel's story is about to be completely rewritten.";
        $story->Save();

        $story = new story();
        $story->user_id = Auth::id();
        $story->title= "Les Misérables";
        $story->genre = "Historical fiction";
        $story->synopsis = "Introducing one of the most famous characters in literature, Jean Valjean - the noble peasant imprisoned for stealing a loaf of bread. In Les Misérables Victor Hugo takes readers deep into the Parisian underworld, immerses them in a battle between good and evil, and carries them onto the barricades during the uprising of 1832. ";
        $story->Save();

        $story = new story();
        $story->user_id = Auth::id();
        $story->title= "The Alchemist";
        $story->genre = "Drama";
        $story->synopsis = "Paulo Coelho's enchanting novel has inspired a devoted following around the world. This story, dazzling in its powerful simplicity and inspiring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried in the Pyramids. Along the way he meets a Gypsy woman, a man who calls himself king, and an alchemist, all of whom point Santiago in the direction of his quest. No one knows what the treasure is, or if Santiago will be able to surmount the obstacles along the way. But what starts out as a journey to find worldly goods turns into a discovery of the treasure found within. Lush, evocative, and deeply humane, the story of Santiago is an eternal testament to the transforming power of our dreams and the importance of listening to our hearts.";
        $story->Save();

        $story = new story();
        $story->user_id = Auth::id();
        $story->title= "Water for Elephants";
        $story->genre = "Fiction";
        $story->synopsis = "In an America made colourless by prohibition and the Depression, the circus is a refuge of sequins and sensuality. But behind the glamour lies a darker world, where both animals and men are dispensable. Where falling in love is the most dangerous act of all…";
        $story->Save();

        $story = new story();
        $story->user_id = Auth::id();
        $story->title= "The Odyssey";
        $story->genre = "Epic";
        $story->synopsis = "The Odyssey is literature's grandest evocation of everyman's journey through life. In the myths and legends that are retold here, renowned translator Robert Fagles has captured the energy and poetry of Homer's original in a bold, contemporary idiom and given us an Odyssey to read aloud, to savor, and to treasure for its sheer lyrical mastery. This is an Odyssey to delight both the classicist and the general reader, and to captivate a new generation of Homer's students.";
        $story->Save();

        $story = new story();
        $story->user_id = Auth::id();
        $story->title= "The Great Gatsby";
        $story->genre = "Novel";
        $story->synopsis = "F. Scott Fitzgerald’s third book, stands as the supreme achievement of his career. This exemplary novel of the Jazz Age has been acclaimed by generations of readers. The story of the fabulously wealthy Jay Gatsby and his love for the beautiful Daisy Buchanan, of lavish parties on Long Island at a time when The New York Times noted “gin was the national drink and sex the national obsession,” it is an exquisitely crafted tale of America in the 1920s.";
        $story->Save();

    }
}
