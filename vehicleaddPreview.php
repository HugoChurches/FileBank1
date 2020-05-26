<!DOCTYPE html>
<html>
<div class="flex items-center space-x-3 mb-6">
    <p class="text-3xl mb-0">New Vehicle</p>
</div>

<form class="max-w-md" action="">

    <div class="flex flex-col items-center font-semibold">
        <label class="w-full text-gray-700">Manufacturer</label>
        <input class="w-full rounded border px-2" name="manufacturer" id="manufacturer" placeholder="Manufacturer" type="text">
    </div>
	
	    <div class="flex flex-col items-center font-semibold">
        <label class="w-full text-gray-700">Model</label>
        <input class="w-full rounded border px-2" name="model" id="model" placeholder="Model" type="text">
    </div>
	
		    <div class="flex flex-col items-center font-semibold">
        <label class="w-full text-gray-700">Color</label>
        <input class="w-full rounded border px-2" name="color" id="color" placeholder="Color" type="text">
    </div>
	
	
		    <div class="flex flex-col items-center font-semibold">
        <label class="w-full text-gray-700">Engine Number</label>
        <input class="w-full rounded border px-2" name="engine" id="engine" placeholder="Engine Number" type="text">
    </div>
	
	
		    <div class="flex flex-col items-center font-semibold">
        <label class="w-full text-gray-700">Location</label>
        <input class="w-full rounded border px-2" name="location" id="location" placeholder="Location" type="text">
    </div>
	
			    <div class="flex flex-col items-center font-semibold">
        <label class="w-full text-gray-700">Year</label>
        <input class="w-full rounded border px-2" name="year" id="year" placeholder="Year" type="text">
    </div>


			    <div class="flex flex-col items-center font-semibold">
        <label class="w-full text-gray-700">Mileage</label>
        <input class="w-full rounded border px-2" name="mileage" id="mileage" placeholder="Mileage" type="text">
    </div>
	
	    <div class="flex items-center pt-2">
        <button class="bg-green-200 text-green-800 rounded px-2">Add vehicle</button>
    </div>
	
</form>
    <script src="script.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  </body>
</html>
