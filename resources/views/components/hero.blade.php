<x-welcome>
    <div class="min-h-screen bg-gray-100">
        <!-- Hero Section -->
        <div class="bg-blue-600 text-white text-center py-16">
            <h1 class="text-5xl font-bold">Find Your <span class="text-red-500">Dream Job</span></h1>
            <p class="text-lg mt-3">Browse thousands of job listings from <span class="text-red-500">top companies</span></p>
    
            <form class="mt-6 flex justify-center">
                <input type="text" placeholder="Search for jobs..." class="w-1/3 p-3 border rounded-l-lg text-gray-900">
                <button class="bg-white text-blue-600 px-5 py-3 rounded-r-lg font-semibold">Search</button>
            </form>
        </div>
    
        <!-- Job Category Filters -->
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-3xl font-bold mb-6">Explore Categories</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <button class="bg-white p-4 shadow-md rounded-lg text-center text-gray-700 font-semibold hover:bg-blue-600 hover:text-white">
                    IT & Software
                </button>
                <button class="bg-white p-4 shadow-md rounded-lg text-center text-gray-700 font-semibold hover:bg-blue-600 hover:text-white">
                    Marketing
                </button>
                <button class="bg-white p-4 shadow-md rounded-lg text-center text-gray-700 font-semibold hover:bg-blue-600 hover:text-white">
                    Design
                </button>
                <button class="bg-white p-4 shadow-md rounded-lg text-center text-gray-700 font-semibold hover:bg-blue-600 hover:text-white">
                    Finance
                </button>
                <button class="bg-white p-4 shadow-md rounded-lg text-center text-gray-700 font-semibold hover:bg-blue-600 hover:text-white">
                    Engineering
                </button>
                <button class="bg-white p-4 shadow-md rounded-lg text-center text-gray-700 font-semibold hover:bg-blue-600 hover:text-white">
                    Sales
                </button>
            </div>
        </div>
    
        <!-- Job Listings -->
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-3xl font-bold mb-6">Latest Job Listings</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @for($i = 0; $i < 6; $i++)
                    <div class="bg-white p-5 shadow-md rounded-lg">
                        <h3 class="font-bold text-lg">Job Title {{ $i+1 }}</h3>
                        <p class="text-gray-600">Company Name</p>
                        <p class="text-gray-500 text-sm">Location</p>
                        <a href="#" class="text-blue-600 mt-2 inline-block">View Job</a>
                    </div>
                @endfor
            </div>
        </div>
    
        <!-- Call to Action -->
        <div class="bg-blue-600 text-white text-center py-12">
            <h2 class="text-3xl font-bold">Start Hiring or Find a Job Today!</h2>
            <p class="text-lg mt-2">Join thousands of employers and job seekers.</p>
            <div class="mt-6">
                <a href="#" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold">Post a Job</a>
                <a href="#" class="bg-blue-800 text-white px-6 py-3 rounded-lg font-semibold ml-4">Browse Jobs</a>
            </div>
        </div>
    </div>
</x-welcome>