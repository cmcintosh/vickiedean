********************************************************************
                     D R U P A L    M O D U L E
********************************************************************
Name: CCK Groups Module
Author: Nedjo Rogers
Drupal: 5.x
********************************************************************
DESCRIPTION:

Restricts access permissions for a parent node and its child nodes.

CCK Groups provides a minimal set of groups functionality using CCK features. 

Emphasis on minimal approach, anyone wanting a full groups solution
should use Organic Groups (og) instead.

Example Use:

Limit access to a Case Tracker project and its cases to selected
individuals.

********************************************************************
PREREQUISITES:

Organic Groups module.

Needed because the CaseTracker Basic module allows anyone to view all cases if Organic Groups 
module is not installed, even if other modules such as this one try to restrict access.

If you implement your own custom content type for cases then Organic Groups module is not 
required.

********************************************************************
INSTALLATION:

Note: It is assumed that you have Drupal up and running.  Be sure to
check the Drupal web site if you need assistance.

To set up CCK Groups:
   1. Enable one or more modules that support cck_groups. For now,
      this means casetracker_basic. 
      project_issue and nodereference support are possible future
      additions.
   2. Install and enable the CCK Groups module.
   3. Create a userreference field for the group content type or
      types you're using. You can do this manually 
      or use an existing userreference field. Alternately, you can
      enable the Content Copy module (part of CCK) 
       and import a field definition by following these instructions:
         1. Enable the Content copy and Userreference modules,
            both parts of CCK.
         2. Navigate to Administer > Settings > CCK Groups
            admin/settings/cck-groups).
         3. Click the "Import" link under "Create CCK group".
         4. On the form that loads, select an existing content
            type to apply fields functionality to. For now, 
            casetracker_basic_project is the only supported type.
         5. Click the "Submit" button.
   4. At Administer > Content > Content types, open the edit
      screen for each group content type and select the desired 
      groups behaviour under the "Groups" fieldset.
   5. Return to Administer > Settings > CCK Groups and enable
      access control. CCK Groups needs controls access through
      the node access control system. To initialize this system,
      you need to click the button under "Access Control".
  

********************************************************************
AUTHOR CONTACT

- Report Bugs/Request Features:
   http://drupal.org/cck_groups
       
********************************************************************
ACKNOWLEDGEMENT

Developed by Nedjo Rogers for Code Positive, sponsored by Greenpeace UK
Drupal 6 upgrade by Robert Castelo for Code Positive 


