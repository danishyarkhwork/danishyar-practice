<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.1/tailwind.min.css">
</head>
<body>
    <div class="flex justify-center items-center">
        <div class="rounded overflow-hidden shadow-lg">
          <div class="px-6 py-4">
            <div class="flex items-center justify-between mb-4">
              <h1 class="text-xl font-bold">Employees List</h1>
              <a href="{{route('addEmployee')}}">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">+ Register</button>
            </a>
            </div>
            <table class="table-auto">
                <thead>
                  <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Father's Name</th>
                    <th class="px-4 py-2">Position</th>
                    <th class="px-4 py-2">Department</th>
                    <th class="px-4 py-2">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">John Doe</td>
                    <td class="border px-4 py-2">James Doe</td>
                    <td class="border px-4 py-2">Software Developer</td>
                    <td class="border px-4 py-2">IT</td>
                    <td class="border px-4 py-2">
                      <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded">Edit</button>
                      <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">Jane Doe</td>
                    <td class="border px-4 py-2">Jason Doe</td>
                    <td class="border px-4 py-2">UI/UX Designer</td>
                    <td class="border px-4 py-2">Design</td>
                    <td class="border px-4 py-2">
                      <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded">Edit</button>
                      <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded">Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>

</body>
</html>