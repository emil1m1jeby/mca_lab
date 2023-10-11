#include <stdio.h>
#include <stdlib.h>

struct node{
	int data;
	struct node *next;
};

 node *head;



void insert_first(){
	int item;
	node *temp;
	
	printf("\nEnter value to insert : ");
	scanf("%d",&item);
	
	temp=(node*)malloc(sizeof(node));
	temp->data=item;
		
	if(head == NULL){
		head=temp;
		head->next=NULL;
	}
	else{
		temp->next=head;
		head=temp;
	}
}
void insert_pos(){
     int item ;
     int pos,i;
     struct node*ptr,*temp;
     ptr=(struct node*)malloc(sizeof(struct node*));
     printf("\n enter value:");
     scanf("%d",&item);
     ptr->data=item;
     printf("\n enter pos:");
     scanf("%d",&pos);
     temp=head;
     for(i=1;i<pos-1;i++)
     {
     temp=temp->next;
     if(temp==NULL)
     {
     printf("\n insertion not possible");
     return;
     }
     }
     ptr->next=temp->next;
     temp->next=ptr;
     printf("\n NODE INSERTED");  
}


void display(){
	node *temp;
	int count=1;
	temp=head;
	if(head == NULL){
		printf("\nList is Empty \n");
	}
	else{
	while(temp->next != NULL){
		printf("List [%d] : %d\n",count,temp->data);
		temp=temp->next;
		count++;
	}
	printf("List [%d] : %d\n",count,temp->data);
}
}

void search(){
	node *temp;
	int flag=0;
	int count=1;
	temp=head;
	int data;
	printf("Enter element to search : ");
	scanf("%d",&data);
	
	if(head == NULL){
		printf("\nList is Empty \n");
	}
	else{
	while(temp->next != NULL){
		if(data == temp->data){
			flag=1;
			break;
		}
		temp=temp->next;
		count++;
	}
	if(temp->data == data){
		flag=1;
	}
	if(flag==1){
	printf("\nFound\n");
	}
	else{
		printf("\nnot found\n");
	}
}
}

void 	delete_pos()
{
	int pos;
	int count=1;
	node *temp,*pre;
	temp=head;
	if(head == NULL){
		printf("\nList is Empty \n");
	}
	else
	{
	 printf("\nEnter Position to be deleted : ");
	 scanf("%d",&pos);
	 while(temp->next!=NULL)
	 {
	   if(count==pos)
	      {  
		
		pre->next=temp->next;
	      free(temp);
	      }
		pre=temp;
		temp=temp->next;
		count++;
	}
	}
	
	
}
void delete_end()
{
 int count=1;
 node *temp,pre;
     
}

int main() {
	int opt;
	do{
		printf("\n1)Insert in FIRST");
		printf("\n2)Insert in END");
		printf("\n3)Insert @ a Position");
		printf("\n4)Display");
		printf("\n5)Search");
		printf("\n6)Delete");
		printf("\n0)Quiet\n");
		printf("\nChoose option : ");
		scanf("%d",&opt);
		switch(opt){
			case 1:
				insert_first();
				break;
			case 2:
			     //insert_end();
				break;
			case 3:
				insert_pos();
				break;
			case 4:
				display();
				break;
			case 5:
				search();
				break;
			case 6:
				delete_pos();
				break;
			deault:
				printf("Invalid option ! Try Again..");
		}
	}while(opt!=0);
	return 0;
}
