{ pkgs }: {
  deps = [
    pkgs.vim
    pkgs.php82
    pkgs.php82Packages.psysh
    pkgs.php82Packages.php-cs-fixer
    pkgs.php82Packages.composer
  ];
}
