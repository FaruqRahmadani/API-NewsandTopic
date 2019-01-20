List Method API

// NEWS
- Get All News [/news] (GET)
- Get Specific News [/news/{id}] (GET)
- Store News [/news] (POST)
- Update News [/news/{id}] (PUT)
- Delete News [/news/{id}] (DELETE)
- Filter News [/news/filter/{ draft / publish / deleted}] (GET)

// NEWS PARAMETER
- title = REQUIRED, STRING
- content = REQUIRED, STRING
- topic_id[] = REQUIRED, INTEGER
- publish_at = TIMESTAMP

//TOPIC
- Get All Topic [/topic] (GET)
- Get Specific Topic [/topic/{id}] (GET)
- Store Topic [/topic] (POST)
- Update Topic [/topic/{id}] (PUT)
- Delete Topic [/topic/{id}] (DELETE)

// TOPIC PARAMETER
- name = REQUIRED, STRING
