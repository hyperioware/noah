PHP API STRUCTURE

USERS
  ID (R/D)*
    FIRST_NAME (R/U)*
    LAST_NAME (R/U)*
    BIRTHDAY (R/U)*
    EMAIL (R/U)*
    PHONES (C/R/U/D)
    ADDRESS (C/R/U/D)
    RELATIONSHIP_TO_OWNER (R/U)*
    PERMISSIONS (C/R/U/D)
    DATE_ADDED (R)*
DEVICES
  ID (R/D)*
    NAME (R/U)*
    TYPE (R/U)*
    IP_ADDRESS (R)*
    MAC_ADDRESS (R)*
    OWNER_ID (R/U)*
    DATE_ADDED (R)*
    STATE (R/U)*
    CURRENT_DATA (R)
    VISIBILITY (R/U)*
    ROOM (C/R/U/D)*
FILES
  ID (C/R/D)*
    NAME (R/U)*
    FILE_TYPE (R/U)*
    CATEGORY (R/U)*
    OWNER_ID (R/U)*
    VISIBILITY (R/U)*
    DATE_ADDED (R)*
RESTRICTIONS
  ID (C/R/D)*
    NAME (R/U)*
    TYPE (R/U)*
    OWNER_ID (R/U)*
    DATE_ADDED (R)*
    STATE (R/U)*
    RULE_TEXT (R/U)*
    DESCRIPTION (C/R/U/D)
APPS
  ID (C/R/D)*
    NAME (R/U)*
    SCOPE (C/R/U/D)*
    ROOM_TAGS (C/R/U/D)
    STATE (R/U)*
    DATE_ADDED (R)*
    DESCRIPTION (C/R/U/D)
