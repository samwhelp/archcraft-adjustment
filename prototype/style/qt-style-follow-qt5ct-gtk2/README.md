
# qt-style-follow-qt5ct-gtk2


## Config File Path / Archcraft

* [/etc/environment](https://github.com/archcraft-os/archcraft/blob/master/profile/airootfs/etc/environment#L6)

``` sh
QT_QPA_PLATFORMTHEME=qt5ct
```


## Config File Path

* [/etc/profile.d/qt-style-follow-gtk.sh](config/qt-style-follow-gtk/qt-style-follow-gtk.sh#L4)

``` sh
if [ "$XDG_CURRENT_DESKTOP" != "KDE" ]; then
	export QT_QPA_PLATFORMTHEME=qt5ct
fi
```


* [~/.config/qt5ct/qt5ct.conf](config/qt5ct/qt5ct.conf#L5)

> config snippet

``` ini
[Appearance]
style=gtk2
```


## Notice

> Need config icon_theme

* [~/.config/qt5ct/qt5ct.conf](config/qt5ct/qt5ct.conf#L3)

> config snippet

``` ini
[Appearance]
icon_theme=Zafiro
```


## AUR / Package

* [qt5-styleplugins](https://aur.archlinux.org/packages/qt5-styleplugins)


## Arch Wiki

* Uniform look for Qt and GTK applications / [QGtkStyle](https://wiki.archlinux.org/title/Uniform_look_for_Qt_and_GTK_applications#QGtkStyle)


## Howto


### install

``` sh
$ ./install.sh
```

or

``` sh
$ make install
```


### package-install

``` sh
$ ./package-install.sh
```

or

``` sh
$ make package-install
```


### config-install

``` sh
$ ./config-install.sh
```

or

``` sh
$ make config-install
```


## Check

run

``` sh
pacman -Qm | grep '^qt5'
```

show

```
qt5-styleplugins 5.0.0.20170311-34
```

Please logout and login,

then run

``` sh
env | grep QT_QPA_PLATFORMTHEME
```

show

```
QT_QPA_PLATFORMTHEME=qt5ct
```


## Explore

run

``` sh
pacman -Ql qt5-styleplugins
```

show

```
qt5-styleplugins /usr/
qt5-styleplugins /usr/lib/
qt5-styleplugins /usr/lib/cmake/
qt5-styleplugins /usr/lib/cmake/Qt5Gui/
qt5-styleplugins /usr/lib/cmake/Qt5Gui/Qt5Gui_QGtk2ThemePlugin.cmake
qt5-styleplugins /usr/lib/cmake/Qt5Widgets/
qt5-styleplugins /usr/lib/cmake/Qt5Widgets/Qt5Widgets_QBB10StylePlugin.cmake
qt5-styleplugins /usr/lib/cmake/Qt5Widgets/Qt5Widgets_QCleanlooksStylePlugin.cmake
qt5-styleplugins /usr/lib/cmake/Qt5Widgets/Qt5Widgets_QGtk2StylePlugin.cmake
qt5-styleplugins /usr/lib/cmake/Qt5Widgets/Qt5Widgets_QMotifStylePlugin.cmake
qt5-styleplugins /usr/lib/cmake/Qt5Widgets/Qt5Widgets_QPlastiqueStylePlugin.cmake
qt5-styleplugins /usr/lib/qt/
qt5-styleplugins /usr/lib/qt/plugins/
qt5-styleplugins /usr/lib/qt/plugins/platformthemes/
qt5-styleplugins /usr/lib/qt/plugins/platformthemes/libqgtk2.so
qt5-styleplugins /usr/lib/qt/plugins/styles/
qt5-styleplugins /usr/lib/qt/plugins/styles/libbb10styleplugin.so
qt5-styleplugins /usr/lib/qt/plugins/styles/libqcleanlooksstyle.so
qt5-styleplugins /usr/lib/qt/plugins/styles/libqgtk2style.so
qt5-styleplugins /usr/lib/qt/plugins/styles/libqmotifstyle.so
qt5-styleplugins /usr/lib/qt/plugins/styles/libqplastiquestyle.so
qt5-styleplugins /usr/share/
qt5-styleplugins /usr/share/libalpm/
qt5-styleplugins /usr/share/libalpm/hooks/
qt5-styleplugins /usr/share/libalpm/hooks/90-qt5-styleplugins.hook
```

run

``` sh
ls -1 /usr/lib/qt/plugins/styles/
```

show

```
libbb10styleplugin.so
libkvantum.so
libqcleanlooksstyle.so
libqgtk2style.so
libqmotifstyle.so
libqplastiquestyle.so
libqt5ct-style.so
```
