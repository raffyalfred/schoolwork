<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Birds extends CI_Controller { //controller

	
	public function index() // method
	{
		
		// moving data from controller to view

        $data['heading'] = "The Birds of Alberta";
        $data['picture'] = "owl.jpg";
        $data['content'] = "<p>The great horned owl (Bubo virginianus), also known as the tiger owl (originally derived from early naturalists' description as the  or the hoot owl,[2] is a large owl native to the Americas. It is an extremely adaptable bird with a vast range and is the most widely distributed true owl in the Americas.[3] Its primary diet is rabbits and hares, rats and mice, and voles, although it freely hunts any animal it can overtake, including rodents and other small mammals, larger mid-sized mammals, birds, reptiles, amphibians, and invertebrates. In ornithological study, the great horned owl is often compared to the Eurasian eagle-owl (Bubo bubo), a closely related species, which despite the latter's notably larger size, occupies the same ecological niche in Eurasia, and the red-tailed hawk (Buteo jamaicensis), with which it often shares similar habitat, prey, and nesting habits by day, thus is something of a diurnal ecological equivalent.[4] The great horned owl is one of the earliest nesting birds in North America, often laying eggs weeks or even months before other raptorial birds.[5]</p>";

		$this->load->view('includes/header');
		$this->load->view('bird_view', $data);
		$this->load->view('includes/footer');
    }
    
    public function loon()
    {
        $data['heading'] = "The Birds of Alberta";
        $data['picture'] = "loon.jpg";
        $data['content'] = "The loons (North America) or divers (Great Britain/Ireland) are a group of aquatic birds found in many parts of North America and northern Eurasia. All living species of loons are members of the genus Gavia, family Gaviidae and order Gaviiformes.</p> <p>Loons, which are the size of a large duck or a small goose, resemble these birds in shape when swimming. Like ducks and geese, but unlike coots (which are Rallidae) and grebes (Podicipedidae), the loon's toes are connected by webbing. The loons may be confused with the cormorants (Phalacrocoracidae), which are not too distant relatives of divers, and like them are heavy-set birds whose bellies, unlike those of ducks and geese, are submerged when swimming. Loons in flight resemble plump geese with seagulls' wings that are relatively small in proportion to their bulky bodies. The bird points its head slightly upwards while swimming, but less so than cormorants. In flight, the head droops more than in similar aquatic birds. </p>";

		$this->load->view('includes/header');
		$this->load->view('bird_view', $data);
		$this->load->view('includes/footer');
    }

    public function falcon()
    {
        $data['heading'] = "The Birds of Alberta";
        $data['picture'] = "falcon.jpg";
        $data['content'] = "The falcons are the largest genus in the Falconinae subfamily of Falconidae, which itself also includes another subfamily comprising caracaras and a few other species. All these birds kill with their beaks, using a on the side of their beaks—unlike the hawks, eagles, and other birds of prey in the Accipitridae, which use their feet. </p>";

		$this->load->view('includes/header');
		$this->load->view('bird_view', $data);
		$this->load->view('includes/footer');
    }

}
