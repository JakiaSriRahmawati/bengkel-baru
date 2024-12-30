<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-gradient-to-r from-green-500 to-green-800 p-6">
                    <h3 class="text-white text-center text-3xl font-semibold">Register</h3>
                </div>
                <div class="p-8">
                    <form action="{{ route('register') }}" method="post">
                        @csrf 
                        <div class="mb-5">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                            <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" id="name" name="name" required>
                        </div>
                        <div class="mb-5">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" id="email" name="email" required>
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                            <input type="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" id="password" name="password" required>
                        </div>
                        <div class="mb-5">
                            <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">Confirm Password</label>
                            <input type="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        <div class="mb-5">
                            <label for="role" class="block text-gray-700 font-medium mb-2">Role</label>
                            <select id="role" name="role" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" required>
                                <option value="">Select a role</option>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                                <option value="owner">Owner</option>
                                <option value="kasir">Kasir</option>
                                <option value="mekanik">Mekanik</option>
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="photo" class="block text-gray-700 font-medium mb-2">Upload Foto</label>
                            <input type="file" name="photo" id="photo" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400">
                        </div>                        
                        <div class="d-grid gap-2">
                            <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
