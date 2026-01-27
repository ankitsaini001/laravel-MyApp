<x-messageBanner msg="Message Send Successfully from About Page" />


<h1>About Us</h1>
<p>Welcome, {{ $name }}!</p>
<p>Your Email is: {{ $email }}</p>
<h1>Age: {{$user['age']}}</h1>
<h2>City: {{$user['city']}}</h2>

<!-- Displaying data passed as a foreach array loop -->
<div style="color: blue;">
    <h3>Additional User Information:</h3>
    <ul>
        @foreach($user as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>

</div>

<style>
    .success{
        color: green;
        font-weight: bold;
    }
</style>