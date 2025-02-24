<div class="flex space-x-4 mb-4">
    <button 
        @click="tab = 'transferencias'" 
        :class="tab === 'transferencias' ? 'bg-black text-white rounded-lg border-2 border-yellow-200 border-t-yellow-500' : 'bg-gray-200 text-gray-700 hover:bg-yellow-300 hover:text-black  ' "
        class="px-4 py-2 rounded transition-all rounded-lg text-sm "
    >
        Transferencias
    </button>
    
    <button 
        @click="tab = 'viajes'" 
        :class="tab === 'viajes' ? 'bg-black text-white border-2 border-yellow-200 border-t-yellow-500' : 'bg-gray-200 text-gray-700 hover:bg-yellow-300 hover:text-black border-1 '"
        class="px-4 py-2 rounded transition-all rounded-lg text-sm "
    >
        Viajes
    </button>
</div>