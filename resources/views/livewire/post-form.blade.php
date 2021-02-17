<div>
    <form action="#" wire:submit.prevent="storePost">
        <div class="mb-3">
            <label for="body" class="sr-only">Post body</label>
            <textarea id="body" name="body" cols="30" rows="3" 
            class="w-full border-2 border-gray-200 rounded-lg @error('body') border-pink-500 @enderror" 
            placeholder="Share something" wire:model.defer="body"></textarea>

            @error('body')
                <span class="font-semibold text-sm text-pink-500">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" 
        class="h-10 px-4 text-center text-white bg-indigo-500 font-medium rounded-lg font-semibold">
            Post
        </button>
    </form>

</div>
