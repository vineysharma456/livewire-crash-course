<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <form wire:submit='submit'>
       <div>
         <label for="count">Bird Count</label>
         <input wire:model='count' type="number"/>

       </div>
       <div>
         <label for="notes">Notes</label>
         <textarea wire:model='notes'></textarea>
         
       </div>
       <button>
          Add a new bird entry
       </button>

    </form>
    <div>
      @if ($errors->any())
      <div>
         @foreach ($errors->all() as $error)
               <p>{{ $error }}</p>
         @endforeach
      </div>
     @endif

    </div>
   
   
</div>
