#PLAN FOR LARABAL
    db tables with relations
        - users (foreign  to articles) 
            - name
            - email
            - password
            - role
            - article_id
        - articles (foreign to articles)
            - title
            - body
            - user_id
            - tag ?
        - news
            - title (link)
        - resources
            - title (link)
            - body
    models design
        - user (hasMany article)
        - article (belongsTo user)
        - news
        - resource
    requests (routes) design
        WITHOUT AUTH:
            - home
            - news
            - article
            - donate
            - about
            - contact
            - want to write ?
        WITH AUTH:
        - admin group
            - article crud
            - news
            - resource
        - user 
            - article crud
            - news crud
            - resource crud
    views
        - layouts
            - master
            - admin
        - main page
        - article
        - about
        - donate
        - resources
        - login form
        - admin area
            - write article
            - edit article
            - delete article
            - write news
            - edit news
            - delete news
            - add resource
            - edit resource
            - delete resource
            - add user
            - edit user
            - delete user
    services
        - subscriptions service (user can choose)


TODO
    - unsubscribe(send data with link in email)
    - edit,delete news from index page
    - about,contact,DONATE pages
    - tags list
    - user management (crud)


