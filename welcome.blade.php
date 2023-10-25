
<head>
    <title>Planets</title>
</head>
<body>
    <h1>Planets</h1>
    <?php if ($selected_name !== null): ?>
        <p>Showing information for planet: {{ $selected_name }}</p>
    <?php endif; ?>
    <?php if (count($planets) === 0): ?>
        <p>No matching planets found.</p>
    <?php endif; ?>
    <?php foreach ($planets as $planet): ?>
        <h2>{{ $planet['name'] }}</h2>
        <p>{{ $planet['description'] }}</p>
    <?php endforeach; ?>
</body>
</html>

<!--hier geef je aan hoe het er uit moet zien en wat er moet staan ALS er geen data er van is 