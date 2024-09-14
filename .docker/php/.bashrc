# ~/.bashrc: executed by bash(1) for non-login shells.

# Note: PS1 and umask are already set in /etc/profile. You should not
# need this unless you want different defaults for root.
PS1='${debian_chroot:+($debian_chroot)}\h:\w\$ '
umask 022

# Add bun path to PATH
export BUN_HOME="$HOME/.bun"
export PATH="$BUN_HOME/bin:$PATH"

# Colorized ls command
export SHELL
export LS_OPTIONS='--color=auto'
eval $(dircolors ~/dircolors-solarized/dircolors.256dark)
alias ls='ls $LS_OPTIONS'
alias ll='ls $LS_OPTIONS -l'
alias l='ls $LS_OPTIONS -lA'

# Some more aliases to avoid making mistakes
alias rm='rm -i'
alias cp='cp -i'
alias mv='mv -i'

# Alias for PHP XDebug
alias phpd='php -dzend_extension=xdebug.so -dxdebug.mode=debug -dxdebug.idekey=PHPSTORM -dxdebug.start_with_request=yes -dxdebug.client_host=host.docker.internal -dxdebug.client_port=9001'
