<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;
use App\Http\Requests\LivreFormRequest;
use App\Models\Category;
use App\Models\User;

class LivreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');//Après l'authentification il faut revenir en arrière pour voir la liste des livRes
                                //la redirection n'est pas automatique, il y'a des erreurs MAIS CA MARCHE SI VOUS
                                //REVENEZ DEUX FOIS DE SUITE  EN ARRIERE AVEC LA FLECHE DE RETOUR DU NAVIGATEUR
    }

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livres=Livre::orderByDesc('id')->paginate(10);
        //dd($livres->first());
        return view('front-office.livre.index',compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $livre=new Livre();

        return view('front-office.livre.create',compact('livre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LivreFormRequest $request)
    {
        $imageName="livre.png";
        if($request->file('image')){
            $imageName=time()."_".$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/produits',$imageName);
        }
      $livre=Livre::create([
          'titre'=>$request->titre,
          'auteur'=>$request->auteur,
          'resume'=>$request->resume,
          'editeur'=>$request->editeur,
          'exemplaire'=>$request->exemplaire,
      ]);
      $user=User::first();//specifie l'utilisateur
      //$users=User::all(); l'instruction pour envoyer le mail à tous
      //Mail::to($user)->send(new AjoutProduit($produit));//specifier l'instence qu'on veut envoyer(envoi du mail à l'utilisateur)
      return redirect()->route('livre.show', $livre)->with('statut',"Votre nouveau produit a été bien ajouter!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Livre $livre)
    {
        return view('front-office/livre.show',compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Livre $livre)
    {
        $categories=Category::all();
    
       return view('front-office.livre.edit',['livre'=>$livre, 'categories'=>$categories]);//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LivreFormRequest $request, $id)
    {
        $imageName="livre.png";
        if($request->file('image')){
            $imageName=time()."_".$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/livres',$imageName);
        }
        Livre::where('id',$id)->update([
            'titre'=> $request->titre,
            'auteur'=> $request->auteur,
            'editeur'=> $request->editeur,
            'exemplaire'=> $request->exemplaire,
            'resume'=> $request->resume,
            'category_id'=> $request->category_id,
            'image'=>$imageName,
        ]);
        $livre=Livre::where('id',$id)->first();
        $user=User::first();
        // $user->notify(new NouveauLivre($livre));
        return redirect()->route('livres.show',$id)->with('statut', 'Votre produit a bien été modifier');
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
        Livre::destroy($id);
        return redirect()->back()->with('statut','Votre produit a bien été supprimer!');//
    }
}
