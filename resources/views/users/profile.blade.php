<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .profile-card {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-image img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="profile-card text-center">
        <!-- Profile Image -->
        <div class="profile-image my-3">
            <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : 'https://via.placeholder.com/150' }}" alt="User Image">
        </div>

        <!-- User Name -->
        <h3 class="mb-3">{{ $user->name ?? 'User Name' }}</h3>

        <!-- User Email -->
        <p class="text-muted mb-3">{{ $user->email ?? 'user@example.com' }}</p>

        <!-- Profile Details -->
        <div class="profile-details text-left">
            <p><strong>Company Name:</strong> {{ $user->company_name ?? 'Company Name' }}</p>
            <p><strong>Address:</strong> {{ $user->address ?? '123 Main St, City, Country' }}</p>
            <p><strong>Contact:</strong> {{ $user->contact ?? '+123 456 7890' }}</p>
            <p><strong>Description:</strong> {{ $user->description ?? 'Short description about the user or the company.' }}</p>
        </div>
        <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
        <a href="{{ route('users.edit', Auth::user()->id) }}" class="btn btn-primary">Edit Profile</a>

    </div>
    
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
