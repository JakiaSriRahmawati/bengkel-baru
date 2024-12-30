<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    @include('template.nav')
    
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-gradient-to-r from-red-500 to-red-800 p-6">
                    <h3 class="text-white text-center text-3xl font-semibold">Login</h3>
                </div>
                <div class="p-8">
                    <form action="{{ route('postlogin') }}" method="post">
                        @csrf 
                        <div class="mb-5">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                            <input type="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-5">
                            <label for="role" class="block text-gray-700 font-medium mb-2">Role</label>
                            <select id="role" name="role" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" required>
                                <option value="" class="text-gray-300">Select a role</option>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                                <option value="owner">Owner</option>
                                <option value="kasir">Kasir</option>
                                <option value="mekanik">Mekanik</option>
                            </select>
                        </div>
                        @if (Session::has('status'))
                            <p class="text-red-500 text-center mb-4">{{ Session::get('status') }}</p>
                        @endif
                        <div class="flex justify-between items-center mb-5">
                            <div class="flex items-center">
                                <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-red-600 border-gray-300 rounded focus:ring-red-500">
                                <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
                            </div>
                            <a href="{{ route('register') }}" class="text-sm text-red-500 hover:underline">Don't have an account? Register now</a>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
