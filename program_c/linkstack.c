#include<stdio.h>
#include<stdlib.h>
int count=0,n;
struct node
{
int data;
struct node*next;
};
struct node*start;
void create();
void insert_begin();
void insert_end();
void insert_pos();
void delete_begin();
void delete_end();
void delete_pos();
void search();
void display();

int main()
{
int choice;
printf("enter the size of stack");
scanf("%d",&n);
while(1)
{
 printf("\n1.push\n2.pop\n3.display \n14.exit \n");
 printf("\n enter your choice : ");
 scanf("%d",&choice);
 switch(choice)
  {
	case 1:insert_end();
	break;
	case 2:delete_end();
	break;
	case 3:
	display();
	break;
	case 4:
	exit(0);

	default:
	printf("\n invalid choice");
  }
 }
}


void insert_end()
{
int i=1;
if(start==NULL)
{ 
 int data;
	node *ptr;
	
	printf("\nEnter value to insert : ");
	scanf("%d",&data);
	
	ptr=(node*)malloc(sizeof(node));
	ptr->data=data;
		
	if(start  == NULL)
	{
		start =ptr;
		start ->next=NULL;
	}
	else{
		ptr->next=start ;
		start =ptr;
	}
}
else
{
 struct node*ptr;
 ptr=start;
  while(ptr!=NULL)
  {
   ptr=ptr->next;
  i++;
  }
if(i<=n)
 {
  struct node*ptr,*temp;
  int item;
  ptr=(struct node*)malloc(sizeof(struct node*));
  printf("\n enter value : ");
  scanf("%d",&item);
  ptr->data=item;
  if(start==NULL)
   {
	ptr->next=NULL;
	start=ptr;
	printf("\n node inserted successfully ");
   }
  else
  {
       temp=start;
       while(temp->next!=NULL)
        {
          temp=temp->next;
        }
          temp->next=ptr;
          ptr->next=NULL;
          printf("\n node inserted ");
  }
 }
 else
 {
      printf("stack overflow");
 }
} 
}

void delete_end()
{
 struct node*ptr,*temp;
 if(start==NULL)
 {
  printf("\n list is empty");
 }
 else if(start->next==NULL)
 {
  start=NULL;
  free(start);
  printf("\n node deleted");
 }
 else
 {
  temp=start;
  while(temp->next->next!=NULL)
  {
   temp=temp->next;
  }
  ptr=temp->next;
  temp->next=NULL;
  free(ptr);
  printf("\n node deleted ");
 }
}


void display()
{
 struct node*ptr;
 ptr=start;
 if(ptr==NULL)
  printf("\n stack empty");
 else
 {
  printf("\n stack : ");
  while(ptr!=NULL)
  {
   printf("\n %d",ptr->data);
   ptr=ptr->next;
  }
 }
}


