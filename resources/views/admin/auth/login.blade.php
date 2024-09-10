<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <form action="{{ route('adminPanel.login') }}" method="post">
        @csrf
        <div class="form-group">
            <label for=""></label>
            <input type="email" name="email" id="" placeholder="الايميل">
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for=""></label>
            <input type="password" name="password" id="" placeholder="كلمة المرور">
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <input type="submit" value="تسجيل الدخول">
    </form>
</body>

</html>
