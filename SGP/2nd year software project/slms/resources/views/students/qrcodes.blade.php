<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student QR Codes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<br><br>
    <!-- Filter Form -->
<form method="GET" action="{{ route('students.qrindex') }}">
    <div class="row mb-3">
        <div class="col-md-3">
            <select name="batch" id="batch" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <option value="Batch 01">Batch 01</option>
                <option value="Batch 02">Batch 02</option>
                <option value="Batch 03">Batch 03</option>
                <option value="Batch 04">Batch 04</option>
            </select>
            @error('batch')
            <span class="text-red-600">{{ $message }}</span>
            @enderror
        <br><br>
            <select name="degree" id="degree" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <option value="Bachelor Information Technology (Honor)">Bachelor Information Technology (Honor)</option>
                <option value="Bachelor Business Management (Honor)">Bachelor Business Management</option>
                <option value="Bachelor Software Engineer (Honor)">Software Engineer (Honor)</option>
                <option value="Bachelor Human Resource Management (Honor)">Bachelor Human Resource Management (Honor)</option>
            </select>
            @error('degree')
            <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
    </div>
</form>
    <div class="container">
        <h1 class="mt-5">Student QR Codes</h1>
        <div class="row">
            @foreach($students as $student)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $student->fname }} {{ $student->lname }} <br>{{ $student->degree_name }}</h5>
                            <p class="card-text">Student Id: {{ $student->student_id }}</p>
                            <img src="{{ route('students.qrcode', ['student_id' => $student->student_id]) }}" alt="QR Code">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
