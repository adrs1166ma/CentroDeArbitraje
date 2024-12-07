<form class="space-y-6">
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Nombre</label>
        <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-black focus:border-black" placeholder="Tu nombre completo"/>
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Correo electrónico</label>
        <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-black focus:border-black" placeholder="tucorreo@ejemplo.com"/>
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Motivo</label>
        <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-black focus:border-black">
            <option>Centro de Conciliación</option>
            <option>Asesoría Legal</option>
            <option>Consultoría de Contratos</option>
            <option>Evaluación de Casos</option>
            <option>Mediación Familiar</option>
            <option>Otro</option>
        </select>
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Descripción</label>
        <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-black focus:border-black" placeholder="Describe tu consulta...">

        </textarea>
    </div>
    <button 
    type="submit" 
    class="w-full bg-[#a31a13] text-white px-8 py-3 rounded-lg font-extrabold hover:bg-[#e8241a] transition-all"
    >Enviar</button>
</form>