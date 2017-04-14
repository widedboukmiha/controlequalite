<?php
namespace App\Repositories;

use App\prelevement;
use Illuminate\Support\Str;

class prelevementRepository
{

   /* protected $prelevement;

    public function __construct(prelevement $prelevement)
	{
		$this->prelevement = $prelevement;
	}

	public function store($article, $prelevements)
	{
		$prelevements = explode(',', $prelevements);

		foreach ($prelevements as $prelevement) {

			$prelevement = trim($prelevement);

			$nombre_article = Str::slug($prelevement);

			$prelevement_ref = $this->prelevement->where('nombre_article', $nombre_article)->first();

			if(is_null($prelevement_ref)) 
			{
				$prelevement_ref = new $this->prelevement([
					//'prelevement' => $prelevement,
					'nombre_article' => $nombre_article
				]);	

				$article->prelevements()->save($prelevement_ref);

			} else {
			
				$article->prelevements()->attach($prelevement_ref->id);

			}

		}

	}
	*/

}