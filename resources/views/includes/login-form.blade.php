<div class="form-group">
    <label class="sr-only" for="input-email">Email</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
        </div>
        <input class="form-control" type="email" id="input-email" placeholder="Email" required>
        <div class="invalid-feedback login-email-invalid-feedback">Пожалуйста, введите правильный адрес email</div>
    </div>
</div>
<div class="form-group">
    <label class="sr-only" for="input-password">Password</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-lock"></i></span>
        </div>
        <input class="form-control" type="password" id="input-password" placeholder="Пароль" required>
        <div class="invalid-feedback login-password-invalid-feedback">Пожалуйста, введите верный пароль</div>
    </div>
</div>
<div class="form-group form-items d-flex justify-content-between">
    <label class="form-check-label">
        <input class="mr-2" type="checkbox" checked>Запомнить меня
    </label>
    <a class="text-decoration-none" href="{{ route('users.reset-password') }}">
        <ins>Восстановить пароль</ins>
    </a>
</div>
