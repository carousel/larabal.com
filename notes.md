#PLAN FOR LARABAL
    db tables with relations
        - users (foreign  to articles) 
        - articles (foreign to articles)
        - news
        - resources
        - tips 
    models design
        - user (hasMany article)
        - article (belongsTo user)
        - news
        - resource
        - tip
    requests (routes) design
        - user session
        - article
        - news
        - resource
        - tips
    services
        - subscriptions service (user can choose)
