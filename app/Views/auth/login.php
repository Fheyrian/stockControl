<form method="post" action="<?= site_url('auth/attemptLogin') ?>">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
<?= session()->getFlashdata('error') ?>
