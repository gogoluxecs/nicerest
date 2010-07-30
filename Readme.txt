== Abstract ==
NiceRest lib implements the easy way to have a rest type url in your existing system.
The main goal here is to be easy included in all existing application, you've worked.
General purpose is for open- source systems, written in php, that need extending and modification.
To keep things clear, you doesn't want to mess with the original system code. You need modules,
block, different url system rules for your extensions and so on...

This is not for frameworks like Symfony, because such frameworks don't need it at all.

Its for the systems, that don't use framework, or working with some funny specific solutions 
and you want to escape from the their original structure - hundred of files, that are not organized well,
Lack of adequate design patterns, build on "standard" for php developing system.

== Description ==
Each rest action is like a placeholder to call MVC modules (niceMVC-modules), and then you can
separate your logic in the more readable and OOP way. niceMVC-modules are not putted yet in GitHub,
so I'm going to update periodically that document with information.

Features, that need to be supoorted:
Request method: POST or GET - default is non-specific, executed on both. *TBD
Rewriting url: rules for the urls and their parameters. *TBD

== Implementation ==
1) Autoloading of classes.
2) Rest action is a placeholder, to call MVC-module that holds all of your logic there.
