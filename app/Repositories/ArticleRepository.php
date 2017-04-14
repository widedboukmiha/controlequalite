<?php namespace App\Repositories;

use App\article;

class articleRepository {

    protected $article;

    public function __construct(article $article)
	{
		$this->article = $article;
	}

/*	private function queryWithUserAndprelevements()
	{
		return $this->article->with('user', 'prelevements')
		->orderBy('articles.created_at', 'desc');		
	}

	public function getWithUserAndprelevementsPaginate($n)
	{
		return $this->queryWithUserAndprelevements()->paginate($n);
	}

	public function getWithUserAndprelevementsForprelevementPaginate($prelevement, $n)
	{
		return $this->queryWithUserAndprelevements()
		->whereHas('prelevements', function($q) use ($prelevement)
		{
		  $q->where('prelevements.prelevement_url', $prelevement);
		})->paginate($n);
	}

	public function store($inputs)
	{
		return $this->article->create($inputs);
	}

	/*public function destroy($id)
	{
		$article = $this->article->findOrFail($id);
		$article->prelevements()->detach();
		$article->delete();
	}
    */

}