class huffman{
    public void huff(int l, int r){
        
    }
    public static void main(String[] args) {
        int i = 0, max = 5;
        int[] arr = {4,2,2,1,1};

        // System.out.print("Enter 5 values: \n>");
        // for (int i = 0; i < max; i++) {
        //     arr[i] = var.nextInt();
        // }
        
        i = 0;
        while((arr[i]+arr[i+1])!=10) {
            Arrays.sort(arr);
            arr[i]=arr[i]+arr[i+1];
            arr[i+1] = 100 + arr[i+1];
            i++;
                for(int j = 0; j < max; j++) {
                    System.out.println(arr[j]);
                }
        }
        // for (int i = max-1; i > 0; --i) {
        //     arr[i-1] = arr[i-1] + arr[i];
        //     arr[i]=0;
        //     System.out.println(i+":"+arr[i]);
        //     // i--;
        // }
    }
}