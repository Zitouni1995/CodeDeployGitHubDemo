@csrf
<div class="form-group">
    <label for="">Titre</label>
    <input type="text" name="titre" id="titre" class="form-control" value={{ old('titre')??$livre->titre }}>
  @error("titre")
      <small  class="text-danger">{{ $message }}</small>
    @enderror
  </div>
  <div class="form-group">
      <label for="">Auteur</label>
      <input type="text" name="auteur" id="auteur" class="form-control" value={{ old('auteu')??$livre->auteur }}>
    @error("auteur")
      <small  class="text-danger">{{ $message }}</small>
    @enderror
    </div>
    <div class="form-group">
      <label for="">Resume</label>
      <textarea type="text" name="resume" id="resume" class="form-control" value={{ old('resume')??$livre->resume }}></textarea>
    @error("resume")
      <small  class="text-danger">{{ $message }}</small>
    @enderror
    </div>
    <div class="form-group">
      <label for="">Editeur</label>
      <textarea type="text" name="editeur" id="editeur" class="form-control" value={{ old('editeur')??$livre->editeur }}></textarea>
    @error("editeur")
      <small  class="text-danger">{{ $message }}</small>
    @enderror
    </div>
    
    <div class="form-group">
      <label for="">Exemplaire</label>
      <input type="number" name="exemplaire" id="exemplaire" class="form-control" value={{ old('exmplaire')??$livre->exemplaire }}>
    @error("exemplaire")
      <small  class="text-danger">{{ $message }}</small>
    @enderror
</div>
<button type="submit" class="btn btn-success btn-block btn-lg mt-4">Valider</button>
