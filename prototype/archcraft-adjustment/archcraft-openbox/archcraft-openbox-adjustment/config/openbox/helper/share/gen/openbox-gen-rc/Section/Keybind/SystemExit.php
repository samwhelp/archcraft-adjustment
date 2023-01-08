

	<!-- ## Restart //-->
	<keybind key="A-S-z">
		<action name="Execute">
			<startupnotify>
				<enabled>true</enabled>
				<name>Exit</name>
			</startupnotify>
			<!-- <command>obsession-logout</command> //-->
			<!-- <command>lxsession-logout</command> //-->
			<command>powermenu</command>
		</action>
	</keybind>

<?php
/*
	<keybind key="A-S-z">
		<action name="Restart" />
	</keybind>
*/
?>


	<!-- ## Logout //-->

	<keybind key="A-S-x">
		<action name="Execute">
			<startupnotify>
				<enabled>true</enabled>
				<name>Exit</name>
			</startupnotify>
			<!-- <command>obsession-logout</command> //-->
			<!-- <command>lxsession-logout</command> //-->
			<command>/usr/share/archcraft/openbox/pipemenus/ac-powermenu --logout</command>
		</action>
	</keybind>

	<keybind key="A-C-x">
		<action name="Exit" />
	</keybind>

	<keybind key="C-A-Delete">
		<action name="Exit" />
	</keybind>


	<!-- ## Reconfigure //-->
	<keybind key="A-S-c">
		<action name="Reconfigure" />
	</keybind>
