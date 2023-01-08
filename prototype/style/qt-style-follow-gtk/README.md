
# qt-style-follow-gtk


## Config File Path / Archcraft

* [/etc/environment](https://github.com/archcraft-os/archcraft/blob/master/profile/airootfs/etc/environment#L6)

``` sh
QT_QPA_PLATFORMTHEME=qt5ct
```

## Config File Path

* [/etc/profile.d/qt-style-follow-gtk.sh](config/qt-style-follow-gtk/qt-style-follow-gtk.sh)


``` sh
if [ "$XDG_CURRENT_DESKTOP" != "KDE" ]; then
	export QT_QPA_PLATFORMTHEME=gtk2
fi
```

## Package

* [qt5-gtk2-platformtheme](https://packages.ubuntu.com/jammy/qt5-gtk2-platformtheme)
* [qt5-gtk-platformtheme](https://packages.ubuntu.com/jammy/qt5-gtk-platformtheme)
* [qt6-gtk-platformtheme](https://packages.ubuntu.com/jammy/qt6-gtk-platformtheme)


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
