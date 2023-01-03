
# archcraft-openbox

## 2022-09-16

* Releases / [v22.09](https://github.com/archcraft-os/releases/releases/tag/v22.09)

| File |
| --- |
| [archcraft-2022.09.16-x86_64.iso](https://github.com/archcraft-os/releases/releases/download/v22.09/archcraft-2022.09.16-x86_64.iso) |
| [archcraft-2022.09.16-x86_64.iso.sha256sum](https://github.com/archcraft-os/releases/releases/download/v22.09/archcraft-2022.09.16-x86_64.iso.sha256sum) |
| [archcraft-2022.09.16-x86_64.iso.sig](https://github.com/archcraft-os/releases/releases/download/v22.09/archcraft-2022.09.16-x86_64.iso.sig) |


### download.sh

``` sh
wget -c -i download.txt
```

### download.txt

``` txt
https://github.com/archcraft-os/releases/releases/download/v22.09/archcraft-2022.09.16-x86_64.iso
https://github.com/archcraft-os/releases/releases/download/v22.09/archcraft-2022.09.16-x86_64.iso.sha256sum
https://github.com/archcraft-os/releases/releases/download/v22.09/archcraft-2022.09.16-x86_64.iso.sig
```




## archcraft-openbox / adjustment / mousebind

> Mouse middle scroll on desktop or frame to switch workspace

### context Desktop / orginal

* [config snippet](asset/orginal/rc.xml#L995-L1009)

``` xml
  <mouse>
    <context name="Desktop">
      <mousebind action="Click" button="A-Up">
        <action name="GoToDesktop">
          <to>previous</to>
        </action>
      </mousebind>
      <mousebind action="Click" button="A-Down">
        <action name="GoToDesktop">
          <to>next</to>
        </action>
      </mousebind>
    </context>
  </mouse>
```

### context Desktop / adjust

* [config snippet](rc.xml#L1019-L1028)

``` xml
  <mouse>
    <context name="Desktop">
      <mousebind action="Click" button="A-Up">
        <action name="GoToDesktop">
          <to>previous</to>
        </action>
      </mousebind>
      <mousebind action="Click" button="A-Down">
        <action name="GoToDesktop">
          <to>next</to>
        </action>
      </mousebind>
      <mousebind action="Click" button="Up">
        <action name="GoToDesktop">
          <to>previous</to>
        </action>
      </mousebind>
      <mousebind action="Click" button="Down">
        <action name="GoToDesktop">
          <to>next</to>
        </action>
      </mousebind>
    </context>
  </mouse>
```



### context Frame / orginal

* [config snippet](asset/orginal/rc.xml#L775-L791)


### context Frame / adjust

* [config snippet](rc.xml#L791-L800)

``` xml
  <mouse>
    <context name="Frame">
      <mousebind action="Click" button="A-Up">
        <action name="GoToDesktop">
          <to>previous</to>
        </action>
      </mousebind>
      <mousebind action="Click" button="A-Down">
        <action name="GoToDesktop">
          <to>next</to>
        </action>
      </mousebind>
    </context>
  </mouse>
```


## Link

* archcraft-openbox / [[Adjustment] Mouse middle scroll on desktop or frame to switch workspace](https://github.com/archcraft-os/archcraft-openbox/issues/11)
* archcraft-openbox / [[Proposal] Desktop Mousebind](https://github.com/archcraft-os/archcraft-openbox/issues/1)
