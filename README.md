# Display Customer ID

This is simple plugin which provides a shortcode to display Unique Customer ID. You can simply put the shortcode as below to print the Unique Customer ID.


### Example
```
[wpmu_customer_id]
```

The shortcode also have following attributes
* class   : Class applied to the wrapper span (defaut: wpmu-user-id-span)
* prefix	: Prefix (defaut: EMP)
* before  : Text to print before the Unique Customer ID
* after   : Text to print after the Unique Customer ID


### Example
```
[wpmu_customer_id class="wpmu-user-id-wrapper" prefix="WPMU" before="Hi" after=", Welcome to the WPMU Blog."]
```

Assuming the ID of logged in user is "12" above code will print 
### Sampel Output
```
Hi WPMU12, Welcome to the WPMU Blog.
```
