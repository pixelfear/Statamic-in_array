in_array
=================

> PHP's in_array for Statamic values

If you have an array that looks something like this:

```
event_days:
  - Mon
  - Tue
  - Wed
```

You can do something like this: (the modifier way)

```
{{ if event_day|in_array:Mon }}
  There's an event on monday.
{{ endif }}
```

or this: (the plugin way)

```
{{ if {in_array needle="Mon" haystack="{ event_day|option_list }"} }}
  There's an event on monday.
{{ endif }}
```

or this:


```
{{ if {in_array needle="{ time|format:D }" haystack="{ event_day|option_list }"} }}
  There's an event today!
{{ endif }}
```

Notice when using the plugin method, you need to specify your array as an `option_list`.  
Which means `event_days|option_list` will be `Mon|Tue|Wed`.
