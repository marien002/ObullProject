<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter une cours</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form  action="{{ route('cours_store')}}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nom de la salle de cours </label>
                  <input type="text" name="intitule" class="form-control" id="exampleInputEmail1" aria-describedby="intitule">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <select name="branch_id" class="form-select" aria-label="Default select example">
                    <option selected>Option </option>
                    @forelse ($branchs as $branch )
                    <option value={{ $branch->id }}>{{ $branch->intitule }}</option>
                    @empty

                    @endforelse
                    <option value="0">aucune</option>
                  </select>


                 </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-info">Save </button>
        </form>
        </div>
      </div>
    </div>
  </div>
